<?php
include ( dirname(__FILE__, 5 ) . "/src/model/sql/bitfinex-sql-class.php" );
include ( dirname(__FILE__, 5 ) . "/src/ws/core/task-class.php" );
include ( dirname(__FILE__) . "/bitfinex-ticker-class.php" );

//$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=BCHEUR";
$bootstrap['endpoint_symbols'] = "https://api.bitfinex.com/v1/pubticker/btcusd";
$bootstrap['endpoint'] = "https://api.bitfinex.com/v1/pubticker/btcusd";
$bootstrap['wrapper'] = new BitfinexTicker;
$bootstrap['sql'] = new BitfinexSql;

Task::main( $bootstrap );

?>
