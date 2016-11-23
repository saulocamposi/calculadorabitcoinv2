var app = require('../manager-module.js');

app.controller('blinktradecontroller', ['$scope', '$http', 'blinktradeChartService', function($scope, $http, blinktradeChartService) {

   var dataChart = [];

  $http.jsonp("https://api.blinktrade.com/api/v1/BRL/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
     var dataFox = response.data;
     dataChart.push({"c" : [{"v" : "FoxBit", "f": null},{"v" : dataFox.vol, "f": null}]});
     $scope.foxbit = dataFox;
  });

  $http.jsonp("https://api.blinktrade.com/api/v1/VEF/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    var dataSurbitcoin = response.data;
    dataChart.push({"c" : [{"v" : "SurBitcoin", "f": null},{"v" : dataSurbitcoin.vol, "f": null}]});
    $scope.surbitcoin = dataSurbitcoin;
  });

  $http.jsonp("https://api.blinktrade.com/api/v1/CLP/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    var datachilebit = response.data;
    dataChart.push({"c" : [{"v" : "Chilebit", "f": null},{"v" : datachilebit.vol, "f": null}]});
    $scope.chilebit = datachilebit;
  });

  $http.jsonp("https://api.blinktrade.com/api/v1/PKR/ticker?crypto_currency=BTC&callback=JSON_CALLBACK").then(function(response) {
    var dataUrdubit = response.data;
    dataChart.push({"c" : [{"v" : "Urdubit", "f": null},{"v" : dataUrdubit.vol, "f": null}]});
    $scope.urdubit = dataUrdubit;
  });

  blinktradeChartService.data.rows = dataChart;
  $scope.chart = blinktradeChartService;

  //$scope.brlref = parseInt($scope.foxbit.last);

}]);
