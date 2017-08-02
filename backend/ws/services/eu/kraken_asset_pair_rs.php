<?php
   $service =  json_decode(file_get_contents("https://api.kraken.com/0/public/AssetPairs"));

   $count = 0;

   function getUrlsPairs($service, $count){
     foreach ($service->result as $key => $value) {
       echo $key . "</br>";
       $count++;
     }
     echo $count;
   }


   getUrlsPairs($service,$count);





?>
