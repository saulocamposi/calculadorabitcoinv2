<?php

  $create_db = false;
  $log = false;


  $message = "ENTITY TICKER FLOWBTC SELECTED";

  $sql = "SELECT max(id) from ticker_flowbtc";

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $max = $result->fetch_assoc();

  $sql = "SELECT id, vol, low, high, last, created_at from ticker_flowbtc where id = " . $max['max(id)'];

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $row = $result->fetch_assoc();

?>
