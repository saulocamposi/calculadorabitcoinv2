<?php

include (dirname(__FILE__, 5 ) . "/model/core/active-record-class.php");

$endpoint = "https://poloniex.com/public?command=returnTicker";
$conn = new Connection( $servername, $dbname, $user, $password );
$activeRecord = new ActiveRecord($conn);
$poloniex = new PoloniexTicker( $endpoint, $activeRecord );
$poloniex->postTicker();

?>
