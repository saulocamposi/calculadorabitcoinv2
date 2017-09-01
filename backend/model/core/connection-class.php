<?php

  include( dirname(__FILE__) . "/connection_db.php");

  class Connection {

    private $connect;

    __construct( $servername, $database, $user, $password ){
      $this->connect = getConnection( $servername, $database, $user, $password );
    }

    function destroyConnection($connect){
      mysqli_close( $connect )
    }

    function getConnection( $servername, $database, $user, $password ){
      return mysqli_connect( $servername, $user, $password );
    }

  }

 ?>
