<?php

  $create_db = true;

  include( dirname( __FILE__ , 2) . "/core/drop_db.php");
  include( dirname( __FILE__ , 2) . "/core/create_db.php");

  $create_db = false;

  include( dirname( __FILE__ , 2 ) . "/migrations/cronlog_create.php");
  include( dirname( __FILE__ , 2 ) . "/migrations/ticker_create.php");
  include( dirname( __FILE__ , 2 ) . "/migrations/ticker_bitcointoyou_create.php");
  include( dirname( __FILE__ , 2 ) . "/migrations/ticker_flowbtc_create.php");
  include( dirname( __FILE__ , 2 ) . "/migrations/ticker_foxbit_create.php");
  include( dirname( __FILE__ , 2 ) . "/migrations/ticker_mbtc_create.php");
  include( dirname( __FILE__ , 2 ) . "/migrations/ticker_coinbr_create.php");

 ?>
