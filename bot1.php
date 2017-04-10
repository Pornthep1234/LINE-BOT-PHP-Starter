<?php



$access_token = '6fqhzeqHSb4QgCAoTHlcVtRkA1Wl6HMPWDl4U/HAJsMc59bMWbyKNbQlBPKmDgV0ZEWepsgV6cBgw+MfWFzfQbCdc7E40+oJfWBFUv7poD7frGmjBbefOT83n04BojIPny/a7SgmdvIuBd4INpAaiAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			$proxy = 'http://fixie:Je3suFJEBVStGvm@velodrome.usefixie.com:80';  
                        $proxyauth = 'Pornthep1234:jack1234';
			
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
