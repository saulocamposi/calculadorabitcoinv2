<?php

  $create_db = false;
  $message = "TABLE CRONLOG CREATED";
  $sql = "CREATE TABLE cronlog (
          id int(11) NOT NULL AUTO_INCREMENT,
          transaction int,
          created_at int,
          PRIMARY KEY (`id`)
          )";

  include( dirname( __FILE__ , 2 ) . "/core//pool_db.php");

?>
