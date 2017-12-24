<?php
include ( dirname(__FILE__, 5 ) . "/src/model/sql/kraken-sql-class.php" );
include ( dirname(__FILE__, 5 ) . "/src/ws/core/task-class.php" );
include ( dirname(__FILE__) . "/kraken-ticker-class.php" );

//$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=BCHEUR";
$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=XBTUSD";
$bootstrap['wrapper'] = new KrakenTicker;
$bootstrap['sql'] = new KrakenSql;

Task::main( $bootstrap, $argv );

?>
