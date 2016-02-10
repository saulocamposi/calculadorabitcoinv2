var app = angular.module('calcbtc', ['ngRoute']);

var routes = function($routeProvider){
  $routeProvider
         // route for the bitcoincalculator page
         .when('/', {
             templateUrl : 'tpl/bitcoincalculator.html',
             controller  : 'mbCtrl'
         })
         // route for the satoshicalculator page
           .when('/satoshi', {
               templateUrl : 'tpl/satoshicalculator.html',
               controller  : 'mbCtrl'
           })
           // route for the bitcalculator page
             .when('/bit', {
                 templateUrl : 'tpl/bitcalculator.html',
                 controller  : 'mbCtrl'
             })
             // route for the btc calc income page
               .when('/income', {
                   templateUrl : 'tpl/btc-calc-income.html',
                   controller  : 'mbCtrl'
               })
}


var mbCtrl = function($scope, $http, $resource) {

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

  $http.jsonp("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    $scope.foxbit = response.data;
  });

  $http.get("services/bitvalor_services.php").then(function(response) {
    $scope.bitvalor = response.data;
  });

/*
  $http.get("promasters_services.php").then(function(response) {
    $scope.promasters = response.data;
  });
*/

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

}

app.controller("mbCtrl", ["$scope", "$http", mbCtrl]);
app.config(routes);
