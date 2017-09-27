<?php

  use PHPUnit\Framework\TestCase;

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
