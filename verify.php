<?php
$access_token = 'WbW1HjRllwbfP9bN6AwGCcmZ6Gk4sFM5hsoKdARj0LfEVwXKJn7u7Gv3lBJaY4OBg5lLPvKIJpOErNXlE+Zt+x+3Ki4819h5UzCZvivemhayUXA23znnkJeTNKHrSNU1gPylRZ/5rysHeiyu/pWuvwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
