<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

  if( $_GET['brand'] == "fox" ){

    include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_foxbit_select.php");
    echo json_encode( $row );
  }

  if( $_GET['brand'] == "bitcambio" ){

    include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_bitcambio_select.php");
    echo json_encode( $row );
  }

  if( $_GET['brand'] == "btctoyou" ){

      include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_bitcointoyou_select.php" );
//      $row =  json_decode(file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx"));
//      $row = $row->ticker;
      echo json_encode( $row );
  }

  if( $_GET['brand'] == "negociecoins" ){
    echo $row =  file_get_contents( "https://broker.negociecoins.com.br/api/v3/btcbrl/ticker" );
  }

  if( $_GET['brand'] == "flowbtc" ){

    include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_flowbtc_select.php");
    echo json_encode( $row );
  }

  if( $_GET['brand'] == "mbtc" ){
    //try {

      include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_mbtc_select.php");
      echo json_encode( $row );
      //echo $mtc =  file_get_contents("https://www.mercadobitcoin.net/api/ticker");
    //}
    //catch ( Exception $e ) {
    //  echo $e->getMessage();
    //}

  }


?>
