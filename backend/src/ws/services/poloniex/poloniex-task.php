<?php

include( dirname(__FILE__, 4) . "/model/core/connection_db.php");
include( dirname(__FILE__, 5 ) . "/vendor/autoload.php" );

$endpoint = "https://poloniex.com/public?command=returnTicker";
$conn = new Connection( $bootstrap );
$activeRecord = new ActiveRecord($conn);
$poloniex = new PoloniexTicker( $endpoint, $activeRecord );
$poloniex->postTicker();

?>
