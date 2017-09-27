<?php
$content = file_get_contents( "https://www.bitinka.pe/api/apinka/ticker" );
$bitinka =  simplexml_load_string( $content );

$usdbtc = $bitinka->USD->volumen24hours->BTC;
$usd = $bitinka->USD->volumen24hours->USD;
$usdask = $bitinka->USD->ask;
$usdbid = $bitinka->USD->bid;
$usdlast = $bitinka->USD->last;

$bsfbtc = $bitinka->BSF->volumen24hours->BTC;
$bsf = $bitinka->BSF->volumen24hours->BSF;
$bsfask = $bitinka->BSF->ask;
$bsfbid = $bitinka->BSF->bid;
$bsflast = $bitinka->BSF->last;

$arsbtc = $bitinka->ARS->volumen24hours->BTC;
$ars = $bitinka->ARS->volumen24hours->ARS;
$arsask = $bitinka->ARS->ask;
$arsbid = $bitinka->ARS->bid;
$arslast = $bitinka->ARS->last;

$penbtc = $bitinka->PEN->volumen24hours->BTC;
$pen = $bitinka->PEN->volumen24hours->PEN;
$penask = $bitinka->PEN->ask;
$penbid = $bitinka->PEN->bid;
$penlast = $bitinka->PEN->last;

$bobbtc = $bitinka->BOB->volumen24hours->BTC;
$bob = $bitinka->BOB->volumen24hours->BOB;
$bobask = $bitinka->BOB->ask;
$bobbid = $bitinka->BOB->bid;
$boblast = $bitinka->BOB->last;

$brlbtc = $bitinka->BRL->volumen24hours->BTC;
$brl = $bitinka->BRL->volumen24hours->BRL;
$brlask = $bitinka->BRL->ask;
$brlbid = $bitinka->BRL->bid;
$brllast = $bitinka->BRL->last;

$copbtc = $bitinka->COP->volumen24hours->BTC;
$cop = $bitinka->COP->volumen24hours->COP;
$copask = $bitinka->COP->ask;
$copbid = $bitinka->COP->bid;
$coplast = $bitinka->COP->last;

$ticker = array(
  "usdbtc" => $usdbtc,
  "usd" => $usd,
  "usdask" => $usdask,
  "usdbid" => $usdbid,
  "usdlast" => $usdlast,

  "bsfbtc" => $bsfbtc,
  "bsf" => $bsf,
  "bsfask" => $bsfask,
  "bsfbid" => $bsfbid,
  "bsflast" => $bsflast,

  "arsbtc" => $arsbtc,
  "ars" => $ars,
  "arsask" => $arsask,
  "arsbid" => $arsbid,
  "arslast" => $arslast,

  "penbtc" => $penbtc,
  "pen" => $pen,
  "penask" => $penask,
  "penbid" => $penbid,
  "penlast" => $penlast,

  "bobbtc" => $bobbtc,
  "bob" => $bob,
  "bobask" => $bobask,
  "bobbid" => $bobbid,
  "boblast" => $boblast,

  "brlbtc" => $brlbtc,
  "brl" => $brl,
  "brlask" => $brlask,
  "brlbid" => $brlbid,
  "brllast" => $brllast,

  "copbtc" => $copbtc,
  "cop" => $copbtc,
  "copask" => $copask,
  "copbid" => $copbid,
  "coplast" => $coplast
  );

$ticker = json_encode( $ticker );

echo $ticker;
?>
