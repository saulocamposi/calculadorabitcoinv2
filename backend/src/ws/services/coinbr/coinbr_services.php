<?php
if( $_GET['brand'] == "coinbr" ){
  echo $coinbr =  file_get_contents("https://www.coinbr.net/pubticker");
}
?>
