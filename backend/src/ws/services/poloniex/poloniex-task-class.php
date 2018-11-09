<?php

include( dirname(__FILE__, 4) . "/model/core/connection_db.php");
include( dirname(__FILE__, 5 ) . "/vendor/autoload.php" );
/**
 *
 */

class PoloniexTask
{

  private $endpoint;
  private $conn;
  private $activeRecord;
  private $poloniexclient;
  private $poloniexdao;
  private $sql;
  private $bootstrap;

  function __construct( $bootstrap )
  {

    $this->endpoint = $bootstrap['endpoint'];
    $this->sql = $bootstrap['sql'];
    $this->initialize();

  }

  private function initialize(){

    $this->conn = new Connection( $this->bootstrap );
    $this->activeRecord = new ActiveRecord( $this->conn );
    $this->poloniexclient = new PoloniexClientTicker( $this->endpoint );
    $this->poloniexdao = new PoloniexDao( $this->activeRecord );

  }

  public function getJsonAllBtcByVolume()
  {
    $ticker = $this->poloniexdao->getAllBTCByVolumeTicker( $this->sql['allByVolume'] );
    $ticker = json_encode($ticker);
    echo $ticker;
  }

  public function postTicker()
  {
    $this->poloniexclient->postTicker( $this->sql['postTicker'] );
  }

  public static function  main( $bootstrap, $argv )
  {
    $task = new PoloniexTask( $bootstrap );
    $param = $argv[1] != null ? $argv[1] : $_GET['ticker']; ;
    $param = $param != null ? $task->getJsonAllBtcByVolume() : $task->postTicker();
  }
}

$bootstrap['endpoint'] = "https://poloniex.com/public?command=returnTicker";

PoloniexTask::main( $bootstrap, $argv );

?>
