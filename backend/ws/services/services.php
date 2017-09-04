<?php

  if( $_GET['brand'] == "fox" ){

    include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_foxbit_select.php");
    echo json_encode( $row );

    //echo $foxbit =  file_get_contents("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC");
  }

  if( $_GET['brand'] == "btctoyou" ){

      include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_bitcointoyou_select.php" );
      echo json_encode( $row );
      //echo $bitcointoyou =  file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx");

  }

  if( $_GET['brand'] == "negociecoins" ){
    echo $negociecoins =  file_get_contents( "http://www.negociecoins.com.br/api/v3/btcbrl/ticker" );
  }

  if( $_GET['brand'] == "flowbtc" ){

    include( dirname( __FILE__ , 3 ) . "/model/selects/ticker_flowbtc_select.php");
    echo json_encode( $row );
    //echo $flowbtc =  file_get_contents("https://api.flowbtc.com:8400/GetTicker/BTCBRL/");
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

  if( $_GET['brand'] == "coinbr" ){
    echo $coinbr =  file_get_contents("https://www.coinbr.net/pubticker");
  }
?>
