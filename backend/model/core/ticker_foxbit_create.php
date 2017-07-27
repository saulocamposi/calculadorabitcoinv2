<?php
  $sql = "CREATE TABLE ticker_foxbit(
      hour int ,
      transaction int
    )";
  include( dirname(__FILE__) . "/create_table_db.php");
?>
