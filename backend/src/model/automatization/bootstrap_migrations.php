<?php

  $log = true;
  $sql_log = true;
  $create_db = false;
  $dirname_level = dirname( __FILE__ , 2 );


  include( $dirname_level . "/migrations/cronlog_create.php");
  include( $dirname_level . "/migrations/ticker_create.php");
  include( $dirname_level . "/migrations/ticker_bitcointoyou_create.php");
  include( $dirname_level . "/migrations/ticker_flowbtc_create.php");
  include( $dirname_level . "/migrations/ticker_foxbit_create.php");
  include( $dirname_level . "/migrations/ticker_mbtc_create.php");
  include( $dirname_level . "/migrations/ticker_coinbr_create.php");
  include( $dirname_level . "/migrations/ticker_poloniex_create.php");
  include( $dirname_level . "/migrations/ticker_kraken_create.php");
  include( $dirname_level . "/migrations/ticker_bitfinex_create.php");
  include( $dirname_level . "/migrations/ticker_bitcambio_create.php");

 ?>
