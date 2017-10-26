<?php

$baseVolume = 0;
$lowestAsk = 0;
$highestBid = 0;
$last = 0;
$key = 0;

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
          " . $baseVolume .",
          " . $lowestAsk . ",
          " . $highestBid . ",
          " . $last . ",
          " . $key .  "," .
          date("Y-m-d H:i:s") . "' );";



//$sql = "INSERT INTO "

$sql[0] = "SELECT max(id) FROM ticker_poloniex";

$max['max(id)'] = 0;

$sql[1] = "SELECT id,
                  vol,
                  low,
                  high,
                  last,
                  pair,
                  created_at
          FROM
          ticker_poloniex
          WHERE
          id = " . $max['max(id)'];


$query = "SELECT * FROM ticker_poloniex WHERE created_at IN (SELECT max(created_at) FROM ticker_poloniex)";

$query = "SELECT * FROM ticker_poloniex
          WHERE created_at IN (SELECT max(created_at) FROM ticker_poloniex)
          AND pair LIKE 'BTC_%'
          ORDER BY vol DESC;";

?>
