<?php
  $service =  json_decode(file_get_contents("https://bleutrade.com/api/v2/public/getmarketsummaries"));

  $exchange = $service->result;


  $currency = $exchange->Currency;
  $currencyLong = $exchange->Currency;
  $label = "BTC";
  $last_trader = $exchange->last;
  $price = $last_trader;

  $ticker =
  array(
  "label" => $label ,
  "currency" => $currency ,
  "volume" => $volume ,
  "lastrader" => $last_trader ,
  "price" => $price);

  $ticker = json_encode($ticker);

  echo $ticker;

?>
