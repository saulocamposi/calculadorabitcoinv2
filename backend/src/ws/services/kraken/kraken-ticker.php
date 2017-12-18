<?php
include ( dirname(__FILE__, 5 ) . "/src/model/sql/kraken-sql.php" );
include ( dirname(__FILE__, 5 ) . "/src/ws/core/task-class.php" );

$bootstrap['endpoint'] = "https://api.kraken.com/0/public/Ticker?pair=BCHEUR";

Task::main( $bootstrap, $argv );

?>
