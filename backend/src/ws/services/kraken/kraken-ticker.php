<?php
include ( dirname(__FILE__, 5 ) . "/src/model/sql/kraken-sql.php" );
include ( dirname(__FILE__, 5 ) . "/src/ws/core/task-class.php" );

$bootstrap['endpoint'] = "https://poloniex.com/public?command=returnTicker";

Task::main( $bootstrap, $argv );

?>
