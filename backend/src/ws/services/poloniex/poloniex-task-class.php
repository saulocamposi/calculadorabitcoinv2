<?php
include ( dirname(__FILE__, 5 ) . "/model/core/active-record-class.php" );
include ( dirname(__FILE__) . "/poloniex-client-ticker-class.php" );
include ( dirname(__FILE__) . "/poloniex-dao-class.php" );
include ( dirname(__FILE__) . "/poloniex-sql.php" );

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
    $this->user = $bootstrap['password'];
    $this->sql = $bootstrap['sql'];
    $this->initialize();
  }

  private function initialize(){

    $this->conn = new Connection( $this->servername, $this->dbname, $this->user, $this->password );
    $this->activeRecord = new ActiveRecord($this->conn);
    $this->poloniexclient = new PoloniexClientTicker( $this->endpoint );
    $this->poloniexdao = new PoloniexDao( $this->activeRecord );

  }

  public function getJsonAllBtcByVolume()
  {
    $ticker = $this->poloniexdao->getAllBTCByVolumeTicker( $this->sql );
    $ticker = json_encode($ticker);
    echo $ticker;
  }

  public function postTicker()
  {
    $this->poloniexclient->postTicker( $this->sql );
  }

  public static main(){
    $task = new PoloniexTask();
    $param = $_GET['ticker'];
    $param = $param != null ? $task->getJsonAllBtcByVolume() : $task->postTicker();
  }
}

PoloniexTask::main();

?>
