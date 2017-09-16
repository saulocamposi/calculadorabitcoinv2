<?php

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
              '" .  date("Y-m-d H:i:s") . "' );";

?>
