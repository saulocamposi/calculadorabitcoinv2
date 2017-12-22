<?php
include ( dirname(__FILE__, 5 ) . "/src/model/sql/kraken-sql.php" );
include ( dirname(__FILE__, 5 ) . "/src/ws/core/task-class.php" );
include ( dirname(__FILE__) . "/kraken-ticker-class.php" );


$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=BCHEUR";
$bootstrap['wrapper'] = new KrakenTicker;

Task::main( $bootstrap, $argv );

?>
