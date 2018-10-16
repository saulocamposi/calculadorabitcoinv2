<?php

    print_r($ticker);

    $create_db = false;
    $log = false;
    $message = "INSERTED ROW";

    $sql = "INSERT INTO ticker_bitcambio (
              id ,
              vol ,
              low ,
              high ,
              last ,
              created_at
            )
            VALUES (
              NULL,
              $ticker->vol,
              $ticker->low,
              $ticker->high,
              $ticker->last,
              '" .  date("Y-m-d H:i:s") . "' );";

    include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
