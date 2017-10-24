
<?php
/**
 *
 */
class Dao extends Dao
{
  private $activeRecord;
  private $sql;

  function __construct($activeRecord, $sql)
  {
    $this->activeRecord = $activeRecord;
    $this->sql = $sql;
  }

  function postTicker( $sql )
  {
    $this->activeRecord->persistEntity($sql);
  }

  function getLastTicker( $sql ){
    $max = $this->activeRecord->getEntity( $sql[0] );
    return $this->activeRecord->getEntity($sql[1]);
  }

  function getAllLastMinuteTicker( $sql ){
    return $this->activeRecord->getAll($query);
  }

  function getAllBTCByVolumeTicker( $sql ){
    return $this->activeRecord->getAll($query);
  }

}
 ?>
