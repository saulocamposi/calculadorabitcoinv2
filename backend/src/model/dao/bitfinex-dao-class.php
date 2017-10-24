
<?php
/**
 *
 */
class Bitfinex extends Dao
{
  private $activeRecord;
  private $sql;

  function __construct( $activeRecord, $sql )
  {
    $this->activeRecord = $activeRecord;
    $this->sql = $sql;
  }

}
 ?>
