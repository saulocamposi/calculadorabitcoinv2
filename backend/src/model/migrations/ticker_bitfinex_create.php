<?php

  $message = "TABLE BITFINEX CREATED";

  $sql = "CREATE TABLE ticker_bitfinex (
          id int NOT NULL AUTO_INCREMENT,
          mid decimal(16,8) ,
          ask decimal(16,8) ,
          last_price decimal(16,8) ,
          low decimal(16,8) ,
          high varchar(30) ,
          volume decimal(16,8) ,
          created_at DATETIME,
          PRIMARY KEY (`id`)
          )";

include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
