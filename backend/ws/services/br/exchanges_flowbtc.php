<?php

     $ticker =  json_decode(file_get_contents("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC"));

     include( dirname( __FILE__ , 3 ) . "/model/seed/insert_ticker_flowbtc.php");

?>
