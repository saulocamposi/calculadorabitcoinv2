<?php
   //$service =  file_get_contents("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC");
   header("Access-Control-Allow-Origin: *");
   header('Content-Type: application/json');
   $service =  file_get_contents("https://bitcambio_api.blinktrade.com/api/v1/BRL/ticker");
   echo $service;
?>
