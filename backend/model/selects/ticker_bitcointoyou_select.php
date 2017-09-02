<?php

  $message = "ENTITY TICKER BITCOINTOYOU SELECTED";

  $sql = "SELECT id, volume, min, max, created_at from  ticker_bitcointoyou";

  include( dirname( __FILE__ , 2 ) . "/core/pool_db.php");

  print_r( $result );

?>
