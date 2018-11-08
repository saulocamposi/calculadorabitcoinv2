<?php
  header("Access-Control-Allow-Origin: *");
  header('Content-Type: application/json');
   $service =  file_get_contents("https://api.blinktrade.com/api/v1/CLP/ticker?crypto_currency=BTC");
   echo $service;
?>
