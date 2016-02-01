<?php

error_reporting(E_ALL);

use GoodLinks\BuzzStreamFeed\Api;
use GoodLinks\BuzzStreamFeed\History;
use GoodLinks\BuzzStreamFeed\HistoryItem;

require_once('vendor/autoload.php');

$Loader = new josegonzalez\Dotenv\Loader('.env');
$Loader->parse();
$Loader->putenv();

Api::setConsumerKey(getenv('BUZZSTREAM_CONSUMER_KEY'));
Api::setConsumerSecret(getenv('BUZZSTREAM_CONSUMER_SECRET'));

$key = isset($_GET['key']) ? $_GET['key'] : null;
if (!$key || $key != getenv('WEB_KEY')) {
    die("Access denied");
}

$offset = isset($_GET['offset']) ? $_GET['offset'] : null;
$size = isset($_GET['size']) ? $_GET['size'] : 50;

$history = History::getList($offset, $size);

echo "<title>BuzzStream Feed</title>";

foreach ($history as $historyItem) {
    /** @var $historyItem HistoryItem */
    $date = $historyItem->getDate();
    $websiteUrls = $historyItem->getWebsiteNamesCsv();
    $project = $historyItem->getProjectName();
    $summary = $historyItem->getSummary();
    
    echo "<br>$project ($date) $websiteUrls - $summary";
}