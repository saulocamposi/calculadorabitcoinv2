<?php
  class BitfinexTicker{

    private $mid;
    private $bid;
    private $ask;
    private $last_price;
    private $low;
    private $high;
    private $volume;
    private $timestamp;

    function __construct(){

    }

    public function wrapper( /*$ticker, $sql*/ )
    {
      $ticker = json_decode( file_get_contents( "https://api.bitfinex.com/v1/pubticker/ltcusd" ) );


      $this->mid = $ticker->mid;
      $this->bid = $ticker->bid;
      $this->ask = $ticker->ask;
      $this->last_price = $ticker->last_price;
      $this->low = $ticker->low;
      $this->high = $ticker->high;
      $this->volume = $ticker->volume;
      $this->timestamp = $ticker->timestamp;

      print_r($ticker);

      }
  }
  $a = new BitfinexTicker;
  $a->wrapper();


 ?>
