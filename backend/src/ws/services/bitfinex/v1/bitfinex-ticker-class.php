<?php

include (dirname(__FILE__, 4 ) . "/model/core/active-record-class.php");

class BitfinexTicker
{
  private $ticker;
  private $activeRecord;

  function __construct( $activeRecord )
  {
    $this->activeRecord = $activeRecord;
  }

  function initialize()
  {
    try {

      return true;

    } catch ( Exception $e ) {

      echo "Message ". $e.getMessage();

    }
  }

  function getSymbols( $endpoint ){

    $symbols = [];

    try {
      $symbols = json_decode(file_get_contents( $endpoint )) ;

    } catch ( Exception $e ) {
      echo "Message ". $e.getMessage();
    }

    return $symbols;

  }

  function getTicker( $endpoint )
  {
    $this->ticker = json_decode(file_get_contents( $endpoint )) ;
    return $this->ticker;
  }

  function getAllTickersApi($symbolsEndpoint, $baseEndpoint)
  {

    $ticker = [];

    $symbols = $this->getSymbols($symbolsEndpoint);

    $start = microtime(true);

    foreach ($symbols as $symbol) {
      $endpoint = $baseEndpoint . $symbol;
      //$nodeSymbol = array($symbol);
      $nodeTicker = array($this->getTicker( $endpoint ));

      print_r($nodeTicker);
      //$ticker[$symbol] = $nodeTicker;
      sleep(1);
    }

    $time_elapsed_secs = microtime(true) - $start;

    print $time_elapsed_secs;


    //|return $ticker;
    //return $endpoint;
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


/*

  function postTicker()
  {
    foreach ( $this->ticker as $key => $value ) {

      $sql = "INSERT INTO ticker_bitfinex (
                id ,
                mid ,
                ask ,
                last_price ,
                low ,
                high ,
                volume ,
                created_at
              )
              VALUES (
                NULL,
                $value->mid,
                $value->ask,
                $value->last_price,
                $value->low,
                $value->high,
                $value->volume,"
                . "'" . $key . "'" . ", '" .
                date("Y-m-d H:i:s") . "' );";

      $this->activeRecord->persistEntity($sql);
    }
  }



  function getLastTicker(){
    $sql = array();
    $sql[0] = "SELECT max(id) from ticker_bitfinex";
    $max = $this->activeRecord->getEntity( $sql[0] );
    $sql[1] = "SELECT id ,
                mid ,
                ask ,
                last_price ,
                low ,
                high ,
                volume ,
                created_at from ticker_bitfinex where id = " . $max['max(id)'];

    return $this->activeRecord->getEntity($sql[1]);
  }

  function getAllLastMinuteTicker(){
    $query = "SELECT * FROM ticker_bitfinex where created_at in (SELECT max(created_at) from ticker_bitfinex)";
    return $this->activeRecord->getAll($query);
  }

  function getAllBTCByVolumeTicker(){
    $query = "SELECT * FROM ticker_bitfinex
              where created_at in (SELECT max(created_at) from ticker_bitfinex)
              AND pair like 'BTC_%'
              order by vol DESC;";
    return $this->activeRecord->getAll($query);
  }
*/
}
?>
