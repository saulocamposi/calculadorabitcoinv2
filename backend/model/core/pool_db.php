<?php

    include( dirname(__FILE__) . "/connection_db.php");

    if ( $create_db ) {
      $connect = mysqli_connect( $servername, $user, $password );
    } else {
      $connect = mysqli_connect( $servername, $user, $password, $dbname );
    }

    if ( !$connect ) {
      die("Connection failed:\r\n " . mysqli_connect_error() );
    } else {
      echo "Connection Sucess\r\n";
    }

    if(mysqli_query( $connect, $sql )){
      echo $message . "\r\n";
    } else {
      echo "Error insert\r\n" . mysqli_error( $connect );
    };

    if(mysqli_close( $connect )){
      echo "Success Close DB\r\n";
    } else {
      echo "Error CloseDB \r\n" . mysqli_error( $connect );
    };

?>
