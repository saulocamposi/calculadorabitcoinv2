<?php

/**
 *
 */
class WsUtils
{
  private $endPoint;

  function __construct($endPoint)
  {
    $this->endPoint = $endPoint;
  }

  function viewFirstNode(){
    return true;
  }

  function isJson(){
    $value =  json_decode(file_get_contents($this->endPoint));
    return $value = $value != null ? true : false;
  }

  function endPointIsValid(){
    return true;
  }

}
?>
