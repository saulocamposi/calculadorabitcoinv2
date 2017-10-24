<?php

    $message = "CREATE DATABASE exchanges";
    $sql = "CREATE DATABASE exchanges";
    $dirname_level = dirname( __FILE__ , 2 );

    include( $dirname_level . "/core/pool_db.php");

?>
