<?php

    print_r($ticker);

    $message = "INSERTED ROW";

    $sql = "INSERT INTO ticker_poloniex (
              id ,
              vol ,
              low ,
              high ,
              last ,
              pair ,
              created_at
            )
            VALUES (
              NULL,
              $ticker->vol,
              $ticker->low,
              $ticker->high,
              $ticker->last,
              $ticker->pair,
              null );";

    include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
