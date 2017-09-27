<?php

  include( dirname(__FILE__) . "/connection_db.php");

  class Connection
  {

    public $connect;
    public $servername;
    public $database;
    public $user;
    public $password;

    function __construct( $servername, $database, $user, $password )
    {
      $this->servername = $servername;
      $this->database = $database;
      $this->user = $user;
      $this->password = $password;
    }

    function destroyConnection( $connect )
    {
      mysqli_close( $connect );
    }

    function getConnection()
    {
       $this->connect = mysqli_connect( $this->servername, $this->user, $this->password, $this->database );
       return $this->connect;
    }

  }

  //$conn = new Connection( $servername, $dbname, $user, $password );
  //print_r($conn->getConnection());


 ?>
