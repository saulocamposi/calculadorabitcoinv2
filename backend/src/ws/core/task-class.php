<?php

$dirname_model_level = dirname(__FILE__, 5 );

include ( dirname(__FILE__, 4 ) . "/src/model/core/active-record-class.php" );

include ( dirname(__FILE__, 4 ) . "/src/model/dao/dao-class.php" );

include ( dirname(__FILE__) . "/client-ticker-class.php" );

 class Task
 {

   private $endpoint;
   private $conn;
   private $activeRecord;
   private $client;
   private $dao;
   private $sql;
   private $servername;
   private $dbname;
   private $user;
   private $password;

   function __construct( $bootstrap )
   {

     $this->endpoint = $bootstrap['endpoint'];
     $this->servername = $bootstrap['servername'];
     $this->dbname = $bootstrap['dbname'];
     $this->user = $bootstrap['user'];
     $this->password = $bootstrap['password'];
     $this->sql = $bootstrap['sql'];
     $this->wrapper = $bootstrap['wrapper'];
     $this->initialize();

   }

   private function initialize(){

     $this->conn = new Connection( $this->servername, $this->dbname, $this->user, $this->password );
     $this->activeRecord = new ActiveRecord( $this->conn );
     $this->client = new ClientTicker( $this->endpoint );
     $this->dao = new Dao( $this->activeRecord );

   }

   public function getJsonAllBtcByVolume()
   {
     $ticker = $this->dao->getAllBTCByVolumeTicker( $this->sql['allByVolume'] );
     $ticker = json_encode($ticker);
     echo $ticker;
   }

   public function postTicker()
   {
     $this->client->postTicker( $this->wrapper, $this->sql, $this->activeRecord );
   }

   public static function  main( $bootstrap, $argv )
   {
     $task = new Task( $bootstrap );

     //$param = $_GET != null ? $_GET['ticker'] : null;

     //$param = is_array($argv) ? $argv[1] : null;

     if(is_array($argv) && array_key_exists( 1, $argv)){
       $param = $argv[1];
       $task->postTicker();

     }else{

     }

     //$param = $param != null ? $task->getJsonAllBtcByVolume() : $task->postTicker();
   }
 }


 //TODO its gonna be the implementation service
 //$bootstrap['endpoint'] = "https://poloniex.com/public?command=returnTicker";

// Task::main( $bootstrap, $argv );




?>
