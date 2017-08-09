<?php

  $create_db = false;
  $message = "TABLE TICKER CREATED";

  $sql = "CREATE TABLE ticker (
          id int NOT NULL AUTO_INCREMENT,
          volume int ,
          min int ,
          max int ,
          created_at DATE,
          PRIMARY KEY (`id`)
          )";

  include( dirname(__FILE__) . "/pool_db.php");

?>
