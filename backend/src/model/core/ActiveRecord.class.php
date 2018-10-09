<?php

include( dirname(__FILE__, 4 ) . "/vendor/autoload.php" );

class ActiveRecord {

  public $conn;

function __construct( Connection $conn )
{

  $this->conn = $conn->getConnection();

}

function getConnection()
{
  $this->conn->getConnection();
}


function dblog( $sql )
{
  $log = true;
  $sql_log  = true;
  $message = "Connection true\r\n";

  if( $log ){
    echo $message . "\r\n";
    if( $sql_log ) {
      echo $sql . "\r\n";
    }
  }
}

function dblogError( $sql )
{
  $log = true;
  $sql_log  = true;

  if ( $log ) {
    if( $sql_log ) {
      echo $sql . "\r\n";
    }
    echo "Error query\r\n" . mysqli_error( $this->conn ). "\r\n";
  }
}


function getEntity ( $sql )
{

    if( $result = mysqli_query( $this->conn, $sql ) ){

      $this->dblog($sql);

      return $result->fetch_assoc();
      //return $result->fetch_array();

    } else {

      $this->dblogError($sql);
      return false;

    };
  }

  function getAll ( $sql )
  {

      if( $result = mysqli_query( $this->conn, $sql ) ){

        while($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        return $arr;
        //return $result->fetch_array();
      } else {

        $this->dblogError($sql);
        return false;

      };
    }

  function persistEntity( $sql ){

      if( $result = mysqli_query( $this->conn, $sql ) ){

        $this->dblog($sql);

        return $result;

      } else {

        $this->dblogError($sql);
        return false;

      };
  }

}

?>
