var app = require('../manager-module.js');

app.controller('blinktradecontroller', ['$scope','$http', 'exchange', function($scope, $http, exchange) {
    $scope.exchangeservice = exchange;

    /****************************************/
    /*             BLINKTRADE SERVICES         */
    /****************************************/

    $http.jsonp("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
      $scope.foxbit = response.data;
    });

    $http.jsonp("https://api.blinktrade.com/api/v1/VEF/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
      $scope.surbitcoin = response.data;
    });

    $http.jsonp("https://api.blinktrade.com/api/v1/CLP/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
      $scope.chilebit = response.data;
    });

    $http.jsonp("https://api.blinktrade.com/api/v1/PKR/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
      $scope.urdubit = response.data;
    });


  }])
  .factory('exchange', ['$http', function($http) {
    console.log($http);
    return "hello";
  }]);
