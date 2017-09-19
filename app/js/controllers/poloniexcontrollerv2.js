var app = require('../manager-module.js');

app.controller('poloniexcontrollerv2', ['$scope','$http', /*'polionexChartService',*/ function($scope, $http, polionexChartService) {

    var dataChart = [];

    var root_path = "backend/ws/services/eu/poloniex/";


    $http.get(root_path + "poloniex-task-select.php").then(function(response) {
      var ticker = response.data;
      $scope.tickerpoloniex = ticker;
      console.log(ticker);
    });

  }]);
