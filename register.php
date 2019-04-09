<?php
if (!$_GET['uid']) {
  die("Token is missing");
}

if ($_POST['name']) {
  $name = $_POST['name'];

  require "vendor/autoload.php";

  $access_token = 'Vxjt4m86PzjD+o/TMkTVFOi77LVDjEEJp9X6hCHnMDPM8Fx8kplicC5n8dxekV9SeGu8AacU2dZQImE+xfLIpkqeQkEHf6sa2P5fqScFtp2NeKC4upJvsLZEOfqQZiUy/PCR4bFZh6ls3MzT6LSkxgdB04t89/1O/w1cDnyilFU=';

  $channelSecret = '94bd50a658cfc05dae429bcc2bec01c9';

  $pushID = $_GET['uid']; //'Ue02282be45e608fe97e1782252c213e4';

  $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
  $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

  $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello, ' .(($name) ? $name:'Guest'));
  $response = $bot->pushMessage($pushID, $textMessageBuilder);

  echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
  
}
?>
<form method="post" action="register.php?uid=<?php echo $_GET['uid']; ?>">
  Your Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <button type="submit">Sign Up</button>
</form>






