<?php

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
          $value->baseVolume,
          $value->lowestAsk,
          $value->highestBid,
          $value->last,"
          . "'" . $key . "'" . ", '" .
          date("Y-m-d H:i:s") . "' );";


$sql[0] = "SELECT max(id) from ticker_poloniex";
$sql[1] = "SELECT id, vol, low, high, last, pair, created_at FROM ticker_poloniex WHERE id = " . $max['max(id)'];

$query = "SELECT * FROM ticker_poloniex WHERE created_at IN (SELECT max(created_at) FROM ticker_poloniex)";

$query = "SELECT * FROM ticker_poloniex
          WHERE created_at IN (SELECT max(created_at) FROM ticker_poloniex)
          AND pair LIKE 'BTC_%'
          ORDER BY vol DESC;";
?>
