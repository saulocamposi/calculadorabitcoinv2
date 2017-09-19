<?php

include (dirname(__FILE__, 5 ) . "/model/core/active-record-class.php");

class PoloniexTicker
{
  private $endpoint;
  private $ticker;
  private $activeRecord;

  function __construct( $endpoint, $activeRecord )
  {
    $this->activeRecord = $activeRecord;
    $this->endpoint = $endpoint;
    $this->initialize();
  }

  function initialize()
  {
    try {

      $this->ticker = json_decode(file_get_contents( $this->endpoint )) ;

      //echo "Get contents return ticker";

      return true;

    } catch ( Exception $e ) {

      echo "Message ". $e.getMessage();

    }
  }

  function getTicker()
  {
    return $this->ticker;
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

  function postTicker()
  {
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

  function getTicketByPair($pair)
  {

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
    $query = "SELECT * FROM exchanges.ticker_poloniex
              where created_at in (SELECT max(created_at) from ticker_poloniex)
              AND pair like 'BTC_%'
              order by vol DESC;";
    return $this->activeRecord->getAll($query);
  }

}
?>
