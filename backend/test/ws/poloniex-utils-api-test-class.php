<?php
use PHPUnit\Framework\TestCase;

/**
 *
 */
class PoloniexUtilsApiTest extends TestCase
{

  private $endpoint  = "https://poloniex.com/public?command=returnTicker";

  public function setUp()
  {
    $this->instance = new PoloniexTicker($this->endpoint);
  }

  public function tearDown()
  {
    unset($this->instance);
  }

  public function testCheckEndpoint(){
    $this->assertEquals("https://poloniex.com/public?command=returnTicker", $this->endpoint );
  }

  public function testPoloniexClass(){
    $instance = $this->instance;
    $count =  $instance->countTickerElements();
    $count = $count > 0 ? true : false;
    $this->assertTrue($count,true);
  }

  public function testPostTicker(){
    $instance = $this->instance;
    $this->assertTrue($instance->postTicker());

  }

}

 ?>
