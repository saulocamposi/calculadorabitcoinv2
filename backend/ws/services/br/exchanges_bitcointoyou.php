<?php

     $ticker =  json_decode(file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx"));

     include( dirname( __FILE__ , 4 ) . "/model/seed/insert_ticker_bitcointoyou.php");

?>
