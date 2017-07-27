<?php
  $sql = "CREATE TABLE ticker_flowbtc (
          id int,
          volume int ,
          min int ,
          max int
          )";
  include( dirname(__FILE__) . "/create_table_db.php");
?>
