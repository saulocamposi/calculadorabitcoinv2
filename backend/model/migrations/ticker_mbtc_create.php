<?php

  $create_db = false;
  $message = "TABLE TICKERMTC CREATED";

  $sql = "CREATE TABLE ticker_mbtc (
          id int NOT NULL AUTO_INCREMENT,
          volume int ,
          min int ,
          max int,
          created_at DATE,
          PRIMARY KEY (`id`)
          )";

include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
