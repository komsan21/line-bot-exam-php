<?php
$access_token = 'GeSG2LjSoGPo3CwPX+lbCoz2/0HScXojW1L9gnCyljAjqdoSNSR6DRARPxGgQ6heeGu8AacU2dZQImE+xfLIpkqeQkEHf6sa2P5fqScFtp1jH6aTvQ5tB4y6HVetFLIBVNStNo87CAODJIw3FLGRGwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
