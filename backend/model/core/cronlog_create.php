<?php
  $sql = "CREATE TABLE cronlog ( hour int , transaction int )";
  
  include( dirname(__FILE__) . "/create_table_db.php");
?>