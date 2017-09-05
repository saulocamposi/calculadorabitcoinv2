<?php

class PoloniexTicker
{

  private $endpoint = "https://poloniex.com/public?command=returnTicker";
  private $ticker;

  function __construct( $endpoint /*, $daoPoloniex */)
  {

    $this->endpoint = $endpoint;

  }

  function checkEndPoint()
  {
    try {

      $this->ticker = file_get_contents( $this->endpoint );
      return true;

    } catch ( Exception $e ) {

      return false;

    }
  }

  function getTicker()
  {
    return json_decode( $this->ticker );
  }

  function countTickerElements ( $ticker )
  {

    $count = 0;

    foreach ( $ticker as $key => $value ) {
      $count = $count + 1;
    }

    return $count;

  }

  function persist ( $ticker )
  {

  }

}

$endpoint = "https://poloniex.com/public?command=returnTicker";
$poloniex = new PoloniexTicker( "https://poloniex.com/public?command=returnTicker" );

print $poloniex->checkEndPoint();
$ticker = $poloniex->getTicker();

print $count = $poloniex->countTickerElements( $ticker );

print_r ( each( $ticker ) );






?>
