<?php
class KrakenUtils {

  private $endPoint;
  private $pair;
  private $urlPairs;

  function __construct($endPoint){

  }

  function getUrlsPairsWs(){

  }

  function getUrlsPairs($service, $count){
    foreach ($service->result as $key => $value) {
      echo $key . "</br>";
      $count++;
    }
    echo $count;
  }

  function getEndPoint (){

  }

  function setEndPoint (){
  }

  function getPair (){
  }

  function setPair (){
  }

  function getUrlsPairs (){
  }

  function setUrlsPairs (){
  }






}
?>
