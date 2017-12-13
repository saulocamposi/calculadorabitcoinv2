<?php

  $message = "TABLE POLONIEX CREATED";

  $sql = "CREATE TABLE ticker_kraken (
          id int NOT NULL AUTO_INCREMENT,
          vol decimal(16,8) ,
          low decimal(16,8) ,
          high decimal(16,8) ,
          last decimal(16,8) ,
          pair varchar(30) ,
          created_at DATETIME,
          PRIMARY KEY (`id`)
          )";

include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
