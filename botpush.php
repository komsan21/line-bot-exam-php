<?php



require "vendor/autoload.php";

$access_token = 'GeSG2LjSoGPo3CwPX+lbCoz2/0HScXojW1L9gnCyljAjqdoSNSR6DRARPxGgQ6heeGu8AacU2dZQImE+xfLIpkqeQkEHf6sa2P5fqScFtp1jH6aTvQ5tB4y6HVetFLIBVNStNo87CAODJIw3FLGRGwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '94bd50a658cfc05dae429bcc2bec01c9';

$pushID = 'U60904fbb25da1af9f89fc30b5af60704';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







