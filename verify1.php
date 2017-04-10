<?php
$access_token = '6fqhzeqHSb4QgCAoTHlcVtRkA1Wl6HMPWDl4U/HAJsMc59bMWbyKNbQlBPKmDgV0ZEWepsgV6cBgw+MfWFzfQbCdc7E40+oJfWBFUv7poD7frGmjBbefOT83n04BojIPny/a7SgmdvIuBd4INpAaiAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
