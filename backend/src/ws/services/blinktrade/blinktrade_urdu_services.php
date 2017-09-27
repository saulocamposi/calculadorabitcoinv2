<?php
   $service =  file_get_contents("https://api.blinktrade.com/api/v1/PKR/ticker?crypto_currency=BTC");

   echo $service;
?>
