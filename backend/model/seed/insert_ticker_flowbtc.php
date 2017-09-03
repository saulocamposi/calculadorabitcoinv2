<?php

    print_r($ticker);

    $message = "INSERTED ROW";

    $sql = "INSERT INTO ticker_flowbtc (
            id ,
            vol ,
            low ,
            high ,
            last ,
            created_at  )
            VALUES (
              NULL,
              $ticker->vol,
              $ticker->low,
              $ticker->high,
              $ticker->last,
              null );";

    include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
