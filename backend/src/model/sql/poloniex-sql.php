<?php

$baseVolume = 0;
$lowestAsk = 0;
$highestBid = 0;
$last = 0;
$key = 0;

$postTicker = "INSERT INTO ticker_poloniex (
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

$lastId = "SELECT max(id) FROM ticker_poloniex";

$max['max(id)'] = $lastId;

$lastTicker = "SELECT id,
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

$all = "SELECT * FROM ticker_poloniex
          WHERE created_at IN (SELECT max(created_at) FROM ticker_poloniex)";

$allByVolume = "SELECT * FROM ticker_poloniex
          WHERE created_at IN (SELECT max(created_at) FROM ticker_poloniex)
          AND pair LIKE 'BTC_%'
          ORDER BY vol DESC;";

$bootstrap['sql']['allByVolume'] = $allByVolume;
$bootstrap['sql']['postTicker'] = $postTicker;


?>
