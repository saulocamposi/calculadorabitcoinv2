<?php

  $create_db = false;
  $message = "TABLE TICKER BITCOINTOYOU CREATED";

  $sql = "CREATE TABLE ticker_bitcointoyou (
          id INT NOT NULL AUTO_INCREMENT,
          volume INT ,
          min INT ,
          max INT,
          created_at DATE,
          PRIMARY KEY (`id`)
          )";

  include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
