<?php
use PHPUnit\Framework\TestCase;
/**
 *
 */

require ( dirname(__FILE__, 2) . "/src/ws/core/ws-client-class.php");
class WsClientTest extends TestCase
{

  private $instance;


  function setup(){
      $this->instance = new WsClient();
  }

  function testReadTicker(){
    //assert $this->instance
  }
}
 ?>
