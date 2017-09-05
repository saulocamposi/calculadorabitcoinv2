<?php

class ActiveRecord {

  __construct(Connection $connection){

    }

function getConnection(){
  if ( $this->create_db ) {
    $connect = mysqli_connect( $this->servername, $this->user, $this->password );
  } else {
    $connect = mysqli_connect( $this->servername, $this->user, $this->password, $this->dbname );
  }

  if ( !$connect ) {
    die("Connection failed:\r\n " . mysqli_connect_error() );
  } else {
    if ($log) {
      echo "Connection Sucess\r\n";
    }
  }
}

function getEntity (){

    if( $result = mysqli_query( $connect, $sql ) ){
      if( $log ){

        echo $message . "\r\n";
        if( $sql_log ) {
          echo $sql . "\r\n";
        }

      }
    } else {
      if ( $log ) {
        if( $sql_log ) {
          echo $sql . "\r\n";
        }

        echo "Error query\r\n" . mysqli_error( $connect ). "\r\n";
      }

    };


  }

  function deleteEntity(){

  }

  function insertEntity(){

  }

  function createEntity(){

  }

  function destroyConnection(){
    if(mysqli_close( $connect )){
      if($log){
        echo "Success Close DB\r\n";
      }

    } else {
      if ($log) {
        echo "Error CloseDB \r\n" . mysqli_error( $connect ). "\r\n";
      }
    };
  }

}
?>
