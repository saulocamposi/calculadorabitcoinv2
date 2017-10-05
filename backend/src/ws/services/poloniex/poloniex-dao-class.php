
<?php
/**
 *
 */
class PoloniexDao implements Dao
{
  private $activeRecord;

  function __construct($activeRecord)
  {
    $this->activeRecord = $activeRecord;
  }

  function postTicker( $sql )
  {
    foreach ( $this->ticker as $key => $value ) {
      $this->activeRecord->persistEntity($sql);
    }
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
