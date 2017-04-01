<?php
   $service =  file_get_contents("http://api.blinktrade.com/api/v1/CLP/ticker?crypto_currency=BTC");

   echo $service;
?>
