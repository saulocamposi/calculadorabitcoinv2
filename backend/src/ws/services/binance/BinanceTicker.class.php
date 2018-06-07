<?php
  class BinanceTicker{

    private $symbol;
    private $priceChange;
    private $priceChangePercent;
    private $weightedAvgPrice;
    private $prevClosePrice;
    private $lastPrice;
    private $lastQty;
    private $bidPrice;
    private $bidQty;
    private $askPrice;
    private $askQty;
    private $openPrice;
    private $highPrice;
    private $lowPrice;
    private $volume;
    private $quoteVolume;
    private $openTime;
    private $closeTime;
    private $firstId;
    private $lastId;
    private $count;


    function __construct(){

    }

    public function wrapper( /*$ticker, $sql*/ )
    {
      $ticker = json_decode( file_get_contents( "https://www.binance.com/api/v1/ticker/24hr" ) );
      $ticker = $ticker[0];

      $this->symbol = $ticker->symbol;
      $this->priceChange = $ticker->priceChange;
      $this->priceChangePercent = $ticker->priceChangePercent;
      $this->weightedAvgPrice = $ticker->weightedAvgPrice;
      $this->prevClosePrice = $ticker->prevClosePrice;
      $this->lastPrice = $ticker->lastPrice;
      $this->lastQty = $ticker->lastQty;
      $this->bidPrice = $ticker->bidPrice;
      $this->bidQty = $ticker->bidQty;
      $this->askPrice = $ticker->askPrice;
      $this->askQty = $ticker->askQty;
      $this->openPrice = $ticker->openPrice;
      $this->highPrice = $ticker->highPrice;
      $this->lowPrice = $ticker->lowPrice;
      $this->volume = $ticker->volume;
      $this->quoteVolume = $ticker->quoteVolume;
      $this->openTime = $ticker->openTime;
      $this->closeTime = $ticker->closeTime;
      $this->firstId = $ticker->firstId;
      $this->lastId  = $ticker->lastId;
      $this->count  = $ticker->count;

      print_r($ticker);

      }
  }
  $a = new BinanceTicker;
  $a->wrapper();


 ?>
