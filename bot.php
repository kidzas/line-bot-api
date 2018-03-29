<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('php/line-bot.php');

$channelSecret = '168f539068044bbd287639c7bed96a80';
$access_token  = '6I5bSRbZky4EgclgBFNsbpYjPH0nVQl6txekjoaPtxpnB/P8hOQchHVZOsG0whjfRuJHRO49zndSnToj045CWh6H/O464wZTU2Sp078bIbwHtQhTXy6TwAjHVhQAeD4egeL2HFNHNcbbOiI7fQ85YAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}