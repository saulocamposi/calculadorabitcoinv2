<?php

    $create_db = false;

    $message = "INSERTED ROW";

    $time = time();
    $transaction = 2;
    $mysqltime = date ($time);

    $sql = "INSERT INTO cronlog ( id, transaction, created_at ) values ( NULL, $transaction , $mysqltime );";
echo $sql;
    include( dirname(__FILE__ , 2) . "/core//pool_db.php");

?>
