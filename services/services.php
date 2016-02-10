<?php

  if($_GET['brand'] == "btctoyou"){
    echo $bitcointoyou =  file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx");
  }

  if($_GET['brand'] == "negociecoins"){
    echo $negociecoins =  file_get_contents("http://www.negociecoins.com.br/api/v3/btcbrl/ticker");
  }

  if($_GET['brand'] == "flowbtc"){
    echo $bitvalor =  file_get_contents("https://api.flowbtc.com:8400/GetTicker/BTCBRL/");
  }

  if($_GET['brand'] == "mtc"){
    echo $mtc =  file_get_contents("https://www.mercadobitcoin.net/api/ticker");
  }

  if($_GET['brand'] == "bitvalor"){
    echo $bitvalor =  json_decode(file_get_contents("http://api.bitvalor.com/v1/ticker.json"));
  }
?>
