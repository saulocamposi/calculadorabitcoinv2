<?php

class PoloniexTicker
{

  private $endpoint = "https://poloniex.com/public?command=returnTicker";
  private $ticker;


  function __construct( $endpoint /*, $daoPoloniex */)
  {

    $this->endpoint = $endpoint;
    $this->checkEndPoint();

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

  function getTickerFields(){

  }

}

$endpoint = "https://poloniex.com/public?command=returnTicker";
$poloniex = new PoloniexTicker( "https://poloniex.com/public?command=returnTicker" );

$ticker = $poloniex->getTicker();

$count = $poloniex->countTickerElements( $ticker );

echo "Number of elements is: " . $count . "\r\n";

print_r ( each( $ticker ) );






?>
