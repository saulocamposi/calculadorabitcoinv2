<?php


  $create_db = false;
  $message = "ENTITY TICKER MBTC SELECTED";
  $log = false;

  $sql = "SELECT max(id) from ticker_mbtc";

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $max = $result->fetch_assoc();

  $sql = "SELECT id, vol, low, high, last, created_at from ticker_mbtc where id = " . $max['max(id)'];

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $row = $result->fetch_assoc();

?>
