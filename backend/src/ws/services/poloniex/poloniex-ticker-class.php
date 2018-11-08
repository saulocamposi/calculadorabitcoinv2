<?php
include( dirname(__FILE__, 5 ) . "/vendor/autoload.php" );

class PoloniexTicker
{
  private $endpoint;
  private $ticker;
  private $activeRecord;

  function __construct( $endpoint, $activeRecord )
  {
    $this->activeRecord = $activeRecord;
    $this->endpoint = $endpoint;
  }

  function initialize()
  {
    try {
      echo "TODO initialize";
    } catch ( Exception $e ) {
      echo "Message ". $e.getMessage();
    }
  }

  function getTicker()
  {

    try {

      $this->ticker = json_decode(file_get_contents( $this->endpoint )) ;

      return true;

    } catch ( Exception $e ) {

      echo "Message ". $e.getMessage();

    }

  }

  function countTickerElements()
  {

    $count = 0;

    if ( $this->ticker ) {
      foreach ( $this->ticker as $key => $value ) {
        $count = $count + 1;
      }
    }

    return $count;

  }

  function getTicketByPair($pair)
  {

  }

  function postTicker()
  {
    $this->getTicker();

    foreach ( $this->ticker as $key => $value ) {

      $sql = "INSERT INTO ticker_poloniex (
                id ,
                vol ,
                low ,
                high ,
                last ,
                pair ,
                created_at
              )
              VALUES (
                NULL,
                $value->baseVolume,
                $value->lowestAsk,
                $value->highestBid,
                $value->last,"
                . "'" . $key . "'" . ", '" .
                date("Y-m-d H:i:s") . "' );";

      $this->activeRecord->persistEntity($sql);
    }
  }

  function getLastTicker(){
    $sql = array();
    $sql[0] = "SELECT max(id) from ticker_poloniex";
    $max = $this->activeRecord->getEntity( $sql[0] );
    $sql[1] = "SELECT id, vol, low, high, last, pair, created_at from ticker_poloniex where id = " . $max['max(id)'];
    return $this->activeRecord->getEntity($sql[1]);
  }

  function getAllLastMinuteTicker(){
    $query = "SELECT * FROM ticker_poloniex where created_at in (SELECT max(created_at) from ticker_poloniex)";
    return $this->activeRecord->getAll($query);
  }

  function getAllBTCByVolumeTicker(){
    $query = "SELECT * FROM ticker_poloniex
              where created_at in (SELECT max(created_at) from ticker_poloniex)
              AND pair like 'BTC_%'
              order by vol DESC;";
    return $this->activeRecord->getAll($query);
  }

}
?>
