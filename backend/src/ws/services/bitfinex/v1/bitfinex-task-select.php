<?php

include (dirname(__FILE__) . "/bitfinex-ticker-class.php");

$symbolsEndpoint = "https://api.bitfinex.com/v1/symbols";
$baseEndpoint = "https://api.bitfinex.com/v1/pubticker/";

$conn = new Connection( $bootstrap );
$activeRecord = new ActiveRecord($conn);
$bitfinex = new BitfinexTicker($activeRecord);


//$end = "https://api.bitfinex.com/v1/pubticker/omgusd";

//print_r($bitfinex->getTicker($end));


//$a = $bitfinex->getAllTickersApi($symbolsEndpoint, $baseEndpoint);
//$a = $bitfinex->getSymbols($symbolsEndpoint);

$a = $bitfinex->getAllTickersApi($symbolsEndpoint, $baseEndpoint);
print_r($a);
//$ticker = $bitfinex->getAllBTCByVolumeTicker();
//$ticker = json_encode($ticker);

//echo $ticker;

?>
