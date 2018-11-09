<?php

  include( dirname(__FILE__) . "/connection_db.php");

  class Connection
  {

    public $connect;
    public $servername;
    public $database;
    public $user;
    public $password;

    function __construct( $setup )
    {
      $this->servername = $setup['servername'];
      $this->database = $setup['database'];
      $this->user = $setup['user'];
      $this->password = $setup['password'];
    }

    function destroyConnection( $connect ){
      mysqli_close( $connect );
    }

    function getConnection(){
       $this->connect = mysqli_connect( $this->servername, $this->user, $this->password, $this->database );
       return $this->connect;
    }

  }

 ?>
