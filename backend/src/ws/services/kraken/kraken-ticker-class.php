<?php
  class KrakenTicker{

    private $ask;
    private $bid;
    private $last_trade;
    private $volume;
    private $volume_weighted;
    private $number;
    private $low;
    private $high;
    private $open_today;
    private $pair;

    function __construct(){

    }

    public function wrapper( $ticker, $sql)
    {

    /*  <pair_name> = pair name
    a = ask array(<price>, <whole lot volume>, <lot volume>),
    b = bid array(<price>, <whole lot volume>, <lot volume>),
    c = last trade closed array(<price>, <lot volume>),
    v = volume array(<today>, <last 24 hours>),
    p = volume weighted average price array(<today>, <last 24 hours>),
    t = number of trades array(<today>, <last 24 hours>),
    l = low array(<today>, <last 24 hours>),
    h = high array(<today>, <last 24 hours>),
    o = today's opening price
    */

    print_r($ticker);

   $result = $ticker->result->XXBTZUSD;
   $this->pair = "XBTUSD";
   $this->ask = $result->a[0];
   $this->bid = $result->b[0];
   $this->last_trade = $result->c[0];
   $this->volume = $result->v[0];
   $this->volume_weighted = $result->p[0];
   $this->number = $result->t[0];
   $this->low = $result->l[0];
   $this->high = $result->h[0];
   $this->open_today = $result->o[0];

    return $sql->postTicker($this->volume, $this->low, $this->high, $this->last_trade, $this->pair);

  }

  function getLastTicker($sql){
      return $sql->lastTicker();
  }
}

?>
