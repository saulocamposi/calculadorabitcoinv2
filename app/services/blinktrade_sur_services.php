<?php
   $service =  file_get_contents("https://api.blinktrade.com/api/v1/VEF/ticker?crypto_currency=BTC");

   echo $service;
?>
