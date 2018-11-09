<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include( dirname(__FILE__, 4) . "/model/core/connection_db.php");
include( dirname(__FILE__, 5 ) . "/vendor/autoload.php" );

$bootstrap['wrapper'] = new KrakenTicker;
$bootstrap['sql'] = new KrakenSql;
$bootstrap['action'] = 'select';
$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=XBTUSD";

Task::main( $bootstrap );
?>
