<?php
   $service =  json_decode(file_get_contents("https://poloniex.com/public?command=returnTicker"));

   $exchange = $service->BTC_DASH;


   $volume = $exchange->baseVolume;
   $currency = "DASH";
   $label = "BTC";
   $last_trader = $exchange->last;
   $price = $last_trader;

   $ticker =
   array(
     "label" => $label ,
     "currency" => $currency ,
     "volume" => $volume ,
     "lastrader" => $last_trader ,
     "price" => $price);

   $ticker = json_encode($ticker);


   echo $ticker;

?>
