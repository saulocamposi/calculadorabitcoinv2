<?php

class ClientTicker
{
  private $endpoint;
  private $ticker;

  function __construct( $endpoint )
  {
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


  function postTicker( $sql )
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

  function getTickerBySymbol($pair)
  {

  }

}
?>
