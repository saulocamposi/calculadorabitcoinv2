<?php

  use PHPUnit\Framework\TestCase;

  class ConnectionTest extends TestCase
  {

    function testGetConnection(){

      $servername = 'localhost';
      $database = 'calculadorabitcoin';
      $user = 'root';
      $password = 123;

      $setup = array(
        'servername' => $servername,
        'database' => $database,
        'user' => $user ,
        'password' => $password );

      $conn = new Connection( $setup );

      $this->assertInstanceOf('mysqli', $conn->getConnection() );
    }

  }

 ?>
