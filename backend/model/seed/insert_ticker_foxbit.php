<?php

    print_r($ticker);

    $message = "INSERTED ROW";

    $sql = "INSERT INTO ticker_foxbit (
            id,
            vol,
            low,
            high,
            created_at )
            VALUES (
              NULL,
              $ticker->vol,
              $ticker->low,
              $ticker->high,
              null );";

    include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
