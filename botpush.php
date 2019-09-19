<?php



require "vendor/autoload.php";

$access_token = 'WbW1HjRllwbfP9bN6AwGCcmZ6Gk4sFM5hsoKdARj0LfEVwXKJn7u7Gv3lBJaY4OBg5lLPvKIJpOErNXlE+Zt+x+3Ki4819h5UzCZvivemhayUXA23znnkJeTNKHrSNU1gPylRZ/5rysHeiyu/pWuvwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3a6bb1a5a12e5acf388c0a1d57edd684';

$pushID = 'U2f0db3cc9460f12cdf281b73206e35fc';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







