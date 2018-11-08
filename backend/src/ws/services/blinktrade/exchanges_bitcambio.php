<?php
     $ticker =  json_decode(file_get_contents("https://bitcambio_api.blinktrade.com/api/v1/BRL/ticker"));
     include( dirname( __FILE__ , 4 ) . "/model/seed/insert_ticker_bitcambio.php");
?>
