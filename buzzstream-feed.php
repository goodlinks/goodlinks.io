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

$history = History::getList();
print_r($history);
foreach ($history as $historyItem) {

}