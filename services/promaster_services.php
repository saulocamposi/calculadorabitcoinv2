<?php

   $cotacao =  json_decode(file_get_contents("http://api.promasters.net.br/cotacao/v1/valores"));


   $dolar_cotacao = $cotacao->dolar->cotacao;
   $dolar_variacao = $cotacao->dolar->variacao;
   $euro_cotacao = $cotacao->euro->cotacao;
   $euro_variacao = $cotacao->euro->variacao;
   $atualizacao = $cotacao->atualizacao;

   $ticker =
   array(   
   "dolar_cotacao" => $dolar_cotacao ,
   "dolar_variacao" => $dolar_variacao ,
   "euro_cotacao" => $euro_cotacao,
   "euro_variacao" => $euro_variacao,
   "atualizacao" => $atualizacao
  );

   $ticker = json_encode($ticker);

   echo $ticker;
?>
