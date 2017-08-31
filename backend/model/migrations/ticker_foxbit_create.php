<?php
  
  $message = "TABLE TICKER FOXBIT CREATED";

  $sql = "CREATE TABLE ticker_foxbit (
          id int NOT NULL AUTO_INCREMENT,
          volume int ,
          min int ,
          max int,
          created_at DATE,
          PRIMARY KEY (`id`)
          )";

  include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
