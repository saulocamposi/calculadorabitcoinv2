<?php

  $create_db = false;
  $log = false;

  $message = "ENTITY TICKER BITCAMBIO SELECTED";

  $sql = "SELECT max(id) from ticker_bitcambio";

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $max = $result->fetch_assoc();

  $sql = "SELECT id, vol, low, high, last, created_at from  ticker_bitcambio where id = " . $max['max(id)'];

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $row = $result->fetch_assoc();

?>
