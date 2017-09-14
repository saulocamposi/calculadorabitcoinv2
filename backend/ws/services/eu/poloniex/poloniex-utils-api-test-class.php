<?php
use PHPUnit\Framework\TestCase;

include ( dirname(__FILE__) . '/poloniex-ticker-class' );
/**
 *
 */
class PoloniexUtilsApiTest extends TestCase
{

  private $endpoint  = "https://poloniex.com/public?command=returnTicker";


  public function testCheckEndpoint(){
    $this->assertEquals("https://poloniex.com/public?command=returnTicker", $this->endpoint);
  }

  public function testPoloniexClass(){
    $this->assertTrue(new PoloniexTicker($endpoint));
  }

}

 ?>
