<?php

   $cotacao =  json_decode(file_get_contents("http://api.promasters.net.br/cotacao/v1/valores"));



   // Create a stream
   $opts = array(
     'http'=>array(
       'method'=>"GET",
       'header'=>"Accept-language: en\r\n" .
                 "Cookie: foo=bar\r\n"
     )
   );

   $context = stream_context_create($opts);

   // Open the file using the HTTP headers set above
   $file = file_get_contents('http://api.promasters.net.br/cotacao/v1/valores', false, $context);


/* if(isset(file_get_contents("http://api.promasters.net.br/cotacao/v1/valores"))){
print "false";
 }
*/

//$decode  = get_http_response_code("http://api.promasters.net.br/cotacao/v1/valores");

//print $decode;
print $cotacao;



   print_r($cotacao);
  // print_r($decode);

/*


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
   */
?>
