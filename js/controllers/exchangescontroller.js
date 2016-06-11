var app = require('../manager-module.js');

app.controller('exchangescontroller', ['$scope','$http', 'exchangesChartService', function($scope, $http, exchangesChartService) {

    $scope.chart = exchangesChartService;

    $http.jsonp("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
      $scope.foxbit = response.data;
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

  }]);
