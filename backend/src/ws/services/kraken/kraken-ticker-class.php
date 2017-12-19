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
      $ticker = json_decode(file_get_contents( "https://api.kraken.com/0/public/Ticker?pair=XBTUSD"));
      print_r($ticker->result->XXBTZUSD);

      $result = $ticker->result->XXBTZUSD;

       $this->ask = $result->a[0];
       $this->bid = $result->b[0];
       $this->last_trade = $result->c[0];
       $this->volume_array = $result->v[0];
       $this->volume_weighted = $result->p[0];
       $this->number = $result->t[0];

    }


  }
  new KrakenTicker
 ?>
