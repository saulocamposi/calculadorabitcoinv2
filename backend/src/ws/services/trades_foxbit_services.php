<?php
   $service =  json_decode(file_get_contents("https://api.blinktrade.com/api/v1/BRL/trades?crypto_currency=BTC"));
   $service = json_encode($service);
   echo $service;
?>
