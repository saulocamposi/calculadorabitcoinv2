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


  function postTicker( $wrapper, $sql, $activeRecord )
  {
    $this->getTicker();
    $query = $wrapper->wrapper( $this->ticker , $sql );
    //foreach ( $this->ticker as $key => $value ) {
      $activeRecord->persistEntity($query);
    //}

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

  function getSymbols(){
  }

}
?>
