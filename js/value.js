var app = angular.module('calcbtc', ['ngRoute']);

var routes = function($routeProvider){
  $routeProvider
         // route for the bitcoincalculator page
         .when('/', {
             templateUrl : 'tpl/calc/bitcoincalculator.html',
             controller  : 'mbCtrl'
         })
         // route for the satoshicalculator page
           .when('/satoshi', {
               templateUrl : 'tpl/calc/satoshicalculator.html',
               controller  : 'mbCtrl'
           })
           // route for the bitcalculator page
             .when('/bit', {
                 templateUrl : 'tpl/calc/bitcalculator.html',
                 controller  : 'mbCtrl'
             })
             // route for the btc calc income page
               .when('/income', {
                   templateUrl : 'tpl/calc/btc-calc-income.html',
                   controller  : 'mbCtrl'
               })
}


var mbCtrl = function($scope, $http, $resource) {

  $http.get("services/services.php?brand=coinbr").then(function(response) {
    $scope.coinbr = response.data;
  });

  $http.get("services/services.php?brand=mtc").then(function(response) {
    $scope.mtc = response.data;
  });

  $http.get("services/services.php?brand=btctoyou").then(function(response) {
    $scope.btctoyou = response.data;
  });

  $http.get("services/services.php?brand=flowbtc").then(function(response) {
    $scope.flowbtc = response.data;
  });

  $http.get("services/services.php?brand=negociecoins").then(function(response) {
    $scope.negociecoins = response.data;
  });


  /****************************************/
  /*             FOX BIT SERVICES         */
   /****************************************/
  $http.jsonp("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    $scope.foxbit = response.data;
  });

  $http.get("services/orders_foxbit_services.php").then(function(response) {
    $scope.foxbitorders = response.data;
  });

  $http.jsonp("https://api.blinktrade.com/api/v1/BRL/trades?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    $scope.foxbittrades = response.data;
  });

  /****************************************/
  /*             BLINKTRADE SERVICES         */
  /****************************************/

  $http.jsonp("https://api.blinktrade.com/api/v1/VEF/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    $scope.surbitcoin = response.data;
  });

  $http.jsonp("https://api.blinktrade.com/api/v1/CLP/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    $scope.chilebit = response.data;
  });

  $http.jsonp("https://api.blinktrade.com/api/v1/PKR/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    $scope.urdubit = response.data;
  });

/********************************************/

  $http.get("services/bitvalor_services.php").then(function(response) {
    $scope.bitvalor = response.data;
  });

  $http.get("services/agenciaideias_services.php").then(function(response) {
    $scope.agenciaideias = response.data;
  });

  $http.get("services/forex_services.php").then(function(response) {
    $scope.forex = response.data;
  });

  $http.get("services/doge_polionex_services.php").then(function(response) {
    $scope.doge = response.data;
  });

  $http.get("services/dash_polionex_services.php").then(function(response) {
    $scope.dash = response.data;
  });

  $http.get("services/lite_polionex_services.php").then(function(response) {
    $scope.lite = response.data;
  });

  $http.get("services/ether_polionex_services.php").then(function(response) {
    $scope.ether = response.data;
  });

  $http.get("services/walletfoxbit_cold_services.php").then(function(response) {
    $scope.wfoxcold = response.data;
  });

  $http.get("services/walletfoxbit_hot_services.php").then(function(response) {
    $scope.wfoxhot = response.data;
  });

  $http.get("services/bitinka_services.php").then(function(response) {
    $scope.bitinka = response.data;
  });


  $scope.averageBTC = function(){
    //{{}}(brlref + mtc.ticker.last + foxbit.last + btctoyou.ticker.last + negociecoins.last) / 4
    /*numbersofexchange = 10;
    foxbitlast = $scope.foxbit.last >= 0 ? $scope.foxbit.last : 0 ;
    mtclast = $scope.mtc.last >= 0 ? $scope.mtc.last : 0 ;
    btctoyoulast = $scope.btctoyou.ticker.last >= 0 ? $scope.btctoyou.ticker.last : 0 ;
    negociecoinslast  = $scope.negociecoins.last >= 0 ? $scope.negociecoins.last : 0 ;
    sumof = foxbitlast + mtclast + btctoyoulast + negociecoinslast;
    $scope.brlref =  sumof / 10;
*/
  $scope.brlref = $scope.foxbit.last;
  }


}

app.controller("mbCtrl", ["$scope", "$http", mbCtrl]);
app.config(routes);
