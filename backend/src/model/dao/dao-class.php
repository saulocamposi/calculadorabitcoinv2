
<?php
/**
 *
 */

include ( dirname( __FILE__ ) . "/dao-interface.php" );

class Dao implements DaoInterface
{
  private $activeRecord;

  function __construct( $activeRecord )
  {
    $this->activeRecord = $activeRecord;

  }

  function postTicker( $sql )
  {
    $this->activeRecord->persistEntity( $sql );
  }

  function getLastTicker( $sql ){
    $max = $this->activeRecord->getEntity( $sql[0] );
    return $this->activeRecord->getEntity( $sql[1] );
  }

  function getAllLastMinuteTicker( $sql ){
    return $this->activeRecord->getAll( $sql );
  }

  function getAllBTCByVolumeTicker( $sql ){
    return $this->activeRecord->getAll( $sql );
  }

}
 ?>
