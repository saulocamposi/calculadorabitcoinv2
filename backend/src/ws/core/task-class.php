<?php

/*
$dirname_model_level = dirname(__FILE__, 5 );
include ( dirname(__FILE__, 4 ) . "/src/model/core/ActiveRecord.class.php" );
include ( dirname(__FILE__, 4 ) . "/src/model/dao/dao-class.php" );
include ( dirname(__FILE__) . "/client-ticker-class.php" );
*/



 class Task
 {

   private $endpoint_symbols;
   private $conn;
   private $activeRecord;
   private $client;
   private $dao;
   private $bootstrap;


   function __construct( $bootstrap )
   {

     $this->bootstrap = $bootstrap;
     $this->initialize();

   }

   private function initialize()
   {
     $this->conn = new Connection( $this->bootstrap );
     $this->activeRecord = new ActiveRecord( $this->conn );
     $this->dao = new Dao( $this->activeRecord );
     $this->client = new ClientTicker( $this->bootstrap['endpoint'] );
   }

   public function getJsonAllBtcByVolume()
   {
     //TODO needs to call client to get acess to dao
     $ticker = $this->dao->getAllBTCByVolumeTicker( $this->bootstrap['sql']['allByVolume'] );
     $ticker = json_encode($ticker);
     echo $ticker;
   }

   public function postTicker()
   {
     $this->client->postTicker( $this->bootstrap['wrapper'], $this->bootstrap['sql'], $this->activeRecord );
   }

   public static function  main( $bootstrap )
   {
     $task = new Task( $bootstrap );
     $task->router( $bootstrap, $task );
   }

   public function router( $bootstrap, $task ){

      if (isset($bootstrap['action'])) {
        if ( $bootstrap['action'] == 'select') {
          print "select action \r\n"  ;
        }else {
          $task->postTicker();
        }
      }
   }
 }

?>
