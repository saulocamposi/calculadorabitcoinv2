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

      echo "Get contents return ticker";

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
                . "'" . $key . "'" . ",
                null );";
      $this->activeRecord->persistEntity($sql);
    }
  }

  function getTickerFields ()
  {

  }

}
?>
