<?php
include (dirname(__FILE__, 5 ) . "/model/core/active-record-class.php");
include (dirname(__FILE__) . "/poloniex-client-ticker-class.php");
include (dirname(__FILE__) . "/poloniex-dao-class.php");

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

  function __construct(argument)
  {
    $this->initialize();
  }

  private function initialize(){

    $this->endpoint = "https://poloniex.com/public?command=returnTicker";
    $this->conn = new Connection( $servername, $dbname, $user, $password );
    $this->activeRecord = new ActiveRecord($conn);
    $this->poloniexclient = new PoloniexClientTicker( $endpoint );
    $this->poloniexdao = new PoloniexDao( $activeRecord );

  }

  public function getJsonAllBtcByVolume()
  {
    $ticker = $this->poloniexdao->getAllBTCByVolumeTicker();
    $ticker = json_encode($ticker);
    echo $ticker;
  }

  public function postTicker()
  {
    $this->poloniexclient->postTicker();
  }

  public static main(){
    $task = new PoloniexTask();
    $param = $_GET['ticker'];
    $param = $param != null ? $task->getJsonAllBtcByVolume() : $task->postTicker();
  }
}

PoloniexTask::main();

?>
