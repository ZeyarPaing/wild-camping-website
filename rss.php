<?php
require_once "db_connection.php";
require_once "utils.php";

$query = "SELECT * FROM camping_site";
$result = $connection->query($query);

$rss = new SimpleXMLElement('<rss version="2.0"/>');

$channel = $rss->addChild('channel');
$channel->addChild('title', 'Camping Site RSS Feed');
$channel->addChild('link', 'https://gwsc.com');
$channel->addChild('description', 'Latest camping site news and reviews');

while ($row = mysqli_fetch_assoc($result)) {
    $item = $channel->addChild('item');

    $item->addChild('title', $row['sitename']);
    $item->addChild('link', 'https://gwsc.com/campsite/' . $row['campsiteid']);
    $item->addChild('description', $row['description']);
    $item->addChild('pubDate', date('r'));
    $item->addChild('guid', 'https://gwsc.com/campsite/' . $row['campsiteid']);
    $item->addChild('category', $row['location']);
    $item->addChild('price', $row['price']);
    $item->addChild('rating', $row['rating']);
    $item->addChild('maplink', $row['maplink']);
}

header('Content-Type: application/rss+xml; charset=utf-8');
echo $rss->asXML();
