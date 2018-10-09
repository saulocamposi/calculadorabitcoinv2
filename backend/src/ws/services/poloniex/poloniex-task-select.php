<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//print dirname(__FILE__) . "/poloniex-ticker-class.php";
//include (dirname(__FILE__) . "/poloniex-ticker-class.php");
include( dirname(__FILE__, 4) . "/model/core/connection_db.php");
include( dirname(__FILE__, 5 ) . "/vendor/autoload.php" );

$endpoint = "https://poloniex.com/public?command=returnTicker";
$conn = new Connection( $servername, $dbname, $user, $password );
$activeRecord = new ActiveRecord($conn);
$poloniex = new PoloniexTicker($endpoint, $activeRecord);
$ticker = $poloniex->getAllBTCByVolumeTicker();
$ticker = json_encode($ticker);

echo $ticker;

?>
