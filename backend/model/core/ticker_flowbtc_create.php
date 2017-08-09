<?php

  $create_db = false;
  $message = "TABLE TICKER FLOWBTC CREATED";

  $sql = "CREATE TABLE ticker_flowbtc (
          id int NOT NULL AUTO_INCREMENT,
          volume int ,
          min int ,
          max int,
          created_at DATE,
          PRIMARY KEY (`id`)
          )";

  include( dirname(__FILE__) . "/pool_db.php");

?>
