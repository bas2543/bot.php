<?php
  
function send_LINE($msg){
 $access_token = 'inCSGFVtvmlSjmWak9EIHOQxSp7fu1AEml4wMMBfCpklzNyqGpqSgd+00mxgeQNAymDHGP32+WKi78jDkg/iwYUi8XWwcnt67z6WWIH8aMgwfeuCXGB3vMU5oRxztMlRkFoHa2sDQqXtRhWZPcg1vAdB04t89/1O/w1cDnyilFU=
'; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U8a6a740b3c5938053624dcf504522e22',
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
      curl_close($ch);
      echo $result . "\r\n"; 
}
?>
