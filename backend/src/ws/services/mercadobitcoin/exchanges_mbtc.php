<?php

     $response =  json_decode(file_get_contents("https://www.mercadobitcoin.net/api/ticker"));
     $ticker = $response->ticker;
     include( dirname( __FILE__ , 4 ) . "/model/seed/insert_ticker_mbtc.php");

?>
