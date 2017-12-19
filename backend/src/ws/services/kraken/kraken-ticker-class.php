<?php
  class KrakenTicker{

    private $ask;
    private $bid;
    private $last_trade;
    private $volume_array;
    private $volume_weighted;
    private $number;
    private $low;
    private $high;
    private $today;

    function __construct(){
      $this->wrapper();
    }



    public function wrapper()
    {
      $ticker = json_decode(file_get_contents( "https://api.kraken.com/0/public/Ticker?pair=BCHEUR"));
      print_r($ticker->result->BCHEUR);
    }


  }
  new KrakenTicker
 ?>
