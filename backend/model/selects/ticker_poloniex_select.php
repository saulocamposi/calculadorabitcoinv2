<?php

  $message = "ENTITY TICKER POLONIEX SELECTED";
  $sql = array();
  $sql[0] = "SELECT max(id) from ticker_mbtc";

  //$sql[1] = "SELECT id, vol, low, high, last, pair, created_at from ticker_poloniex where id = " . $max['max(id)'];


?>
