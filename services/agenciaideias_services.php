<?php

   $cotacao =  json_decode(file_get_contents("http://developers.agenciaideias.com.br/cotacoes/json"));

   $bovespa_cotacao = $cotacao->bovespa->cotacao;
   $bovespa_variacao = $cotacao->bovespa->variacao;
   $dolar_cotacao = $cotacao->dolar->cotacao;
   $dolar_variacao = $cotacao->dolar->variacao;
   $euro_cotacao = $cotacao->euro->cotacao;
   $euro_variacao = $cotacao->euro->variacao;
   $atualizacao = $cotacao->atualizacao;

   $ticker =
   array(
   "bovespa_cotacao" => $bovespa_cotacao ,
   "bovespa_variacao" => $bovespa_variacao ,
   "dolar_cotacao" => $dolar_cotacao ,
   "dolar_variacao" => $dolar_variacao ,
   "euro_cotacao" => $euro_cotacao,
   "euro_variacao" => $euro_variacao,
   "atualizacao" => $atualizacao
  );

   $ticker = json_encode($ticker);

   echo $ticker;









?>
