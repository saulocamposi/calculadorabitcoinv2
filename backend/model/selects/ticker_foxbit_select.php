<?php

  $message = "ENTITY TICKER BITCOINTOYOU SELECTED";

  $sql = "SELECT max(id) from ticker_foxbit";

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $max = $result->fetch_assoc();

  $sql = "SELECT id, volume, min, max, created_at from  ticker_foxbit where id = " . $max['max(id)'];

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  $row = $result->fetch_assoc();  

?>
