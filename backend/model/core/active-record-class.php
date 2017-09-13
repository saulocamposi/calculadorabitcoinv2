<?php

include( dirname(__FILE__) . "/connection-class.php" );

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


function getEntity ()
{

  $sql = "select * from ticker_mbtc";

  print_r($this->conn);


    if( $result = mysqli_query( $this->conn, $sql ) ){

      $this->dblog($sql);

      return $result;

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


print $dbname . "DBNAME\r\n";
print $user . " USER\r\n";
print $password . " USER\r\n";
$conn = new Connection( $servername, $dbname, $user, $password );

$active = new ActiveRecord($conn);
print_r($active->getEntity()->fetch_assoc());




?>
