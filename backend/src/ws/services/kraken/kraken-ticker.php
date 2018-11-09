<?php
include ( dirname(__FILE__, 5 ) . "/src/model/core/connection_db.php" );
include ( dirname(__FILE__, 5 ) . "/vendor/autoload.php" );

//$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=BCHEUR";
$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=XBTUSD";
$bootstrap['wrapper'] = new KrakenTicker;
$bootstrap['sql'] = new KrakenSql;
$bootstrap['action'] = "insert";

Task::main( $bootstrap );

?>
