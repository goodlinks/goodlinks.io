<?php

error_reporting(E_ALL);

use GoodLinks\BuzzStreamFeed\Api;
use GoodLinks\BuzzStreamFeed\History;

require_once('vendor/autoload.php');

$Loader = new josegonzalez\Dotenv\Loader('.env');
$Loader->parse();
$Loader->putenv();

Api::setConsumerKey(getenv('BUZZSTREAM_CONSUMER_KEY'));
Api::setConsumerSecret(getenv('BUZZSTREAM_CONSUMER_SECRET'));

// This is going to be moved into a class file and eventually
// replaced with a nice clean (league?) php package
require_once('Oauth.php');

$consumer_key = Api::getConsumerKey();
$consumer_secret = Api::getConsumerSecret();
$base_url = "https://api.buzzstream.com";

#Create a consumer for the buzzstream api
$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

#From the consumer create and sign a request object for 2leg authentication
$request = OAuthRequest::from_consumer_and_token($consumer, NULL, "GET", $base_url . "/v1/history");
$sig_method = new OAuthSignatureMethod_HMAC_SHA1();
$request->sign_request($sig_method, $consumer, NULL);

#Perform request
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $request->to_url());
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array($request->to_header()));
$response = curl_exec($curl);
curl_close($curl);

#Print response
$json_response = json_decode($response, true);
print_r($json_response['list']);
