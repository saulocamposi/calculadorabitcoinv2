<?php

use PHPUnit\Framework\TestCase;
/**
 *
 */

class WsUtilsTest extends TestCase
{

  private $instance;

  function setup(){
    $endPoint = "https://api.bitfinex.com/v1/pubticker/btcusd";
    $this->instance = new WsUtils($endPoint);
  }

  function testViewFirstNode(){
    $remotenode = $this->instance->viewFirstNode();
    $this->assertTrue(true, $remotenode);
  }

  function testEndPointIsValid(){
    $remotenode = $this->instance->endPointIsValid();
    $this->assertTrue($remotenode, true);
  }

  function testIsJson(){
    $remotenode = $this->instance->isJson();
    $this->assertTrue($remotenode, true);
  }
}
 ?>
