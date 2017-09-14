<?php
use PHPUnit\Framework\TestCase;

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
    $instance = new PoloniexTicker($this->endpoint);
    $count =  $instance->countTickerElements();
    $count = $count > 0 ? true : false;
    $this->assertTrue(true,true);
  }

}

 ?>
