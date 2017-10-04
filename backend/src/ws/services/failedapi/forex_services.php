<?php

   $cotacao =  json_decode(file_get_contents("http://www.apilayer.net/api/live?access_key="));

   $btc = $cotacao->quotes->USDBTC;
   $brl = $cotacao->quotes->USDBRL;
   $eur = $cotacao->quotes->USDEUR;
   $cny = $cotacao->quotes->USDCNY;
   $gbp = $cotacao->quotes->USDGBP;
   $rub = $cotacao->quotes->USDRUB;
   $ars = $cotacao->quotes->USDARS;

   $ticker =
   array(
   "btc" => $btc ,
   "brl" => $brl ,
   "eur" => $eur ,
   "cny" => $cny ,
   "gbp" => $gbp ,
   "rub" => $rub ,
   "ars" => $ars
  );

   $ticker = json_encode($ticker);

   echo $ticker;









?>
