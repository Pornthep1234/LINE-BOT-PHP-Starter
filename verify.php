<?php

$access_token = 'xNEdvBrjVFu4Zhr1HnXWb6/1cyEhsTmdVnvoqwTcBMz+tUYbPONUDJvxumT4qV8ijbQNnQ5GnDRZCG5Taq4yhsK9bVUtBDGi9VlEzAArOLBRdvvO17dZFp+Gk0THclEFsXtH4oO4narLMsmu/uTMHgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$proxy = 'http://fixie:r6pUSSzIxPNJelp@velodrome.usefixie.com:80';
$proxyauth = 'Pornthep1234:jack1234';
$result = curl_exec($ch);
curl_close($ch);

echo $result;
