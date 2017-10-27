<?php

$dirname_model_level = dirname(__FILE__, 5 );

include ( dirname(__FILE__, 5 ) . "/src/model/core/active-record-class.php" );
include ( dirname(__FILE__, 5 ) . "/src/model/dao/poloniex-dao-class.php" );
include ( dirname(__FILE__, 5 ) . "/src/model/sql/poloniex-sql.php" );
include ( dirname(__FILE__) . "/poloniex-client-ticker-class.php" );
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
    $this->initialize();

  }

  private function initialize(){

    $this->conn = new Connection( $this->servername, $this->dbname, $this->user, $this->password );
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

  public static function  main( $bootstrap )
  {
    $task = new PoloniexTask( $bootstrap );

/*
    if (defined('STDIN')) {
      $param = $argv[1] != null ? $argv[1] : null ;
    } else {
      $param = $_GET['ticker'];
    }

    $param = $param != null ? $task->getJsonAllBtcByVolume() : $task->postTicker();
    */

    $task->getJsonAllBtcByVolume();

  }
}

$bootstrap['endpoint'] = "https://poloniex.com/public?command=returnTicker";

PoloniexTask::main( $bootstrap );

?>
