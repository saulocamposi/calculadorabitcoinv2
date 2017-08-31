<?php

    $create_db = false;

    $message = "INSERTED ROW";

    $time = time();
    $transaction = 2;
    $mysqltime = date ($time);

    $sql = "INSERT INTO cronlog (
            id,
            transaction,
            created_at )
            VALUES (
              NULL,
              $transaction,
              $mysqltime );";

    include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
