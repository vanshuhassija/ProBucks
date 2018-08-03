<?php

include("vendor/autoload.php");
//include("Client.php");
//include("Signer.php");
//include("HMAC.php");
//include("ActivityUpdateOperation.php");
//include("Analytics.php");
//include("BaseFeed.php");
//include("Feed.php");
//include("helpers.php");
//include("StreamFeedException.php");
//include("StreamWrongInputException.php");

// Initialize the client with your api key and secret
$client = new GetStream\Stream\Client('487euf87en9e', 'kvbfqjngsdk6bqn3u6a26ubrmy6tqxcxw68g2d7h9zszve7dqqxkqfgjh2wgug8c');

// For the feed group 'user' and user id 'eric' get the feed
$ericFeed = $client->feed('user', 'eric');

// Add the activity to the feed
$data = [
    "actor"=>"eric",
    "verb"=>"like",
    "object"=>"3",
    "tweet"=>"Hello world",
];

$ericFeed->addActivity($data);
?>