<?php



require "vendor/autoload.php";

$access_token = 'Vxjt4m86PzjD+o/TMkTVFOi77LVDjEEJp9X6hCHnMDPM8Fx8kplicC5n8dxekV9SeGu8AacU2dZQImE+xfLIpkqeQkEHf6sa2P5fqScFtp2NeKC4upJvsLZEOfqQZiUy/PCR4bFZh6ls3MzT6LSkxgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '94bd50a658cfc05dae429bcc2bec01c9';

$pushID = 'U60904fbb25da1af9f89fc30b5af60704';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







