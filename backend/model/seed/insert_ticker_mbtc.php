<?php

    print_r($ticker);

    $message = "INSERTED ROW";

    $time = time();
    $transaction = 2;
    $mysqltime = date ($time);

    $sql = "INSERT INTO ticker_mtc (
      id,
      volume,
      min,
      max,
      created_at )
      VALUES (
        NULL,
        $foxbit->vol,
        $foxbit->low,
        $foxbit->high,
        null );";
    include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
