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
      if ($log) {
        echo "Connection Sucess\r\n";
      }

    }

    if(mysqli_query( $connect, $sql )){
      if($log){
        echo $message . "\r\n";
        echo $sql . "\r\n";
      }
    } else {
      if ($log) {
        echo $sql . "\r\n";
        echo "Error insert\r\n" . mysqli_error( $connect ). "\r\n";
      }

    };

    if(mysqli_close( $connect )){
      if($log){
        echo "Success Close DB\r\n";
      }

    } else {
      if ($log) {
        echo "Error CloseDB \r\n" . mysqli_error( $connect ). "\r\n";
      }
    };
?>
