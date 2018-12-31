<?php

include (dirname(__FILE__) . "/bitfinex-ticker-class.php");

$endpoint = "https://bitfinex.com/public?command=returnTicker";
$conn = new Connection( $bootstrap );
$activeRecord = new ActiveRecord($conn);
$bitfinex = new BitfinexTicker($activeRecord);
$bitfinex->postTicker();

?>
