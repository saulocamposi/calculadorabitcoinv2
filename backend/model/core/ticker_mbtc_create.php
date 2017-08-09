<?php

  $create_db = false;
  $message = "TABLE TICKERMTC CREATED";

  $sql = "CREATE TABLE TICKERMTC (
          id int NOT NULL AUTO_INCREMENT,
          value int,
          volume int ,
          min int ,
          max int,
          created_at DATE,
          PRIMARY KEY (`id`)
          )";

  include( dirname(__FILE__) . "/pool_db.php");

?>
