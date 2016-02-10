<?php
   //$promasters =  json_decode(file_get_contents("http://api.promasters.net.br/cotacao/v1/valores"));
   $promasters =  file_get_contents("http://api.promasters.net.br/cotacao/v1/valores");

   print $promasters;

   print_r($promasters);

/*
   $currencies = $promasters->valores;

   $currencies = json_encode($currencies);

   echo $currencies;*/
?>
