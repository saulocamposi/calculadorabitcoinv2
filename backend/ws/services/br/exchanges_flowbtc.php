<?php

     $ticker =  json_decode(file_get_contents("https://api.flowbtc.com:8400/GetTicker/BTCBRL/"));

     include( dirname( __FILE__ , 4 ) . "/model/seed/insert_ticker_flowbtc.php");

?>
