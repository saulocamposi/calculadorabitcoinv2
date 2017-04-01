<?php

  if($_GET['brand'] == "fox"){
    echo $foxbit =  file_get_contents("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC");
  }

  if($_GET['brand'] == "btctoyou"){
    echo $bitcointoyou =  file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx");
  }

  if($_GET['brand'] == "negociecoins"){
    echo $negociecoins =  file_get_contents("http://www.negociecoins.com.br/api/v3/btcbrl/ticker");
  }

  if($_GET['brand'] == "flowbtc"){
    echo $flowbtc =  file_get_contents("https://api.flowbtc.com:8400/GetTicker/BTCBRL/");
  }

  if($_GET['brand'] == "mtc"){
    echo $mtc =  file_get_contents("https://www.mercadobitcoin.net/api/ticker");
  }

  if($_GET['brand'] == "coinbr"){
    echo $coinbr =  file_get_contents("https://www.coinbr.net/pubticker");
  }
?>
