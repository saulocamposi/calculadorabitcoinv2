<?php

  use PHPUnit\Framework\TestCase;

  include( dirname(__FILE__) . "/connection_db.php");
  include( dirname(__FILE__) . "/connection-class.php");

  class ConnectionTest extends TestCase
  {

    function testGetConnection(){

      $servername = 'localhost';
      $dbname = 'dbname';
      $user = 'user';
      $password = 987;

      $conn = new Connection( $servername, $dbname, $user, $password );

      print_r($conn);
      
      $this->assertTrue($conn->getConnection());
    }

  }

 ?>
