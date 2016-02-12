<?php
   $service =  json_decode(file_get_contents("https://api.blinktrade.com/api/v1/BRL/trades?crypto_currency=BTC"));
print "<pre>";
print_r($service);
print "</pre>";


exit;

foreach ($obj as $service) {
  $date = $obj->date;
  $price = $obj->price;
  $amount = $obj->amount;
  $side = $obj->side;
}




   $trades =
   array(
     "date" => $date ,
     "price" => $price,
     "amount" => $amount,
     "side" => $side
     );

   $trades = json_encode($trades);

   echo $trades;
?>
