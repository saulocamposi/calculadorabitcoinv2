<?php
   $service =  json_decode(file_get_contents("https://api.blinktrade.com/api/v1/BRL/orderbook?crypto_currency=BTC"));

   $bids = $service->bids;
   $asks = $service->asks;

   $orders =
   array(
     "bids" => $bids ,
     "asks" => $asks
     );

   $orders = json_encode($orders);

   echo $orders;
?>
