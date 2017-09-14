<?php

class PoloniexTicker
{

  private $endpoint;
  private $ticker;


  function __construct( $endpoint /*, $daoPoloniex */)
  {

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

  function persist()
  {

  }

  function getTickerFields ()
  {

  }

}

include( dirname(__FILE__, 5) . "/model/selects/ticker_poloniex_select.php" );

$endpoint = "https://poloniex.com/public?command=returnTicker";
$poloniex = new PoloniexTicker( "https://poloniex.com/public?command=returnTicker" );

echo "Number of elements is: " . $poloniex->countTickerElements() . "\r\n";

print_r (  $poloniex->getTicker()  );

?>
