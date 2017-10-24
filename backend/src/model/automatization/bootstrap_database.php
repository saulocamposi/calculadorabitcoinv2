<?php

  $log = true;
  $sql_log = true;
  $create_db = true;
  $dirname_level = dirname( __FILE__ , 1 );

  include( $dirname_level . "/drop_db.php");
  include( $dirname_level . "/create_db.php");

 ?>
