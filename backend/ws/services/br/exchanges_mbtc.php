<?php

     $ticker =  json_decode(file_get_contents("https://www.mercadobitcoin.net/api/ticker"));

     include( dirname( __FILE__ , 4 ) . "/model/seed/insert_ticker_mbtc.php");

?>
