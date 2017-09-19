<?php

include (dirname(__FILE__) . "/poloniex-ticker-class.php");

$endpoint = "https://poloniex.com/public?command=returnTicker";
$conn = new Connection( $servername, $dbname, $user, $password );
$activeRecord = new ActiveRecord($conn);
$poloniex = new PoloniexTicker($endpoint, $activeRecord);
//$ticker = $poloniex->getLastTicker();
$ticker = $poloniex->getAllLastMinuteTicker();

$ticker = json_encode($ticker);

echo $ticker;

//print_r($ticker);
?>
