var app = require('../manager-module.js');


var polionexcontroller = function($scope, $http, polionexChartService, googleChartApiPromise) {

    var dataChart = [];

    $http.get("app/services/doge_polionex_services.php").then(function(response) {
      var doge = response.data;
      $scope.doge = doge;
      dataChart.push({"c" : [{"v" : "Doge", "f": null},{"v" : doge.volume, "f": null}]});
    });

    $http.get("app/services/dash_polionex_services.php").then(function(response) {
      var dash = response.data;
      $scope.dash = dash;
      dataChart.push({"c" : [{"v" : "Dash", "f": null},{"v" : dash.volume, "f": null}]});
    });

    $http.get("app/services/lite_polionex_services.php").then(function(response) {
      var lite = response.data;
      $scope.lite = lite;
      dataChart.push({"c" : [{"v" : "Lite", "f": null},{"v" : lite.volume, "f": null}]});
    });

    $http.get("app/services/ether_polionex_services.php").then(function(response) {
      var ether = response.data;
      $scope.ether = ether;
      dataChart.push({"c" : [{"v" : "FoxBit", "f": null},{"v" : ether.volume, "f": null}]});
    });

    console.log(dataChart);
    polionexChartService.data.rows = dataChart;
    $scope.chart = polionexChartService;
  }


polionexcontroller.$inject = ['$scope', 'googleChartApiPromise'];

app.controller('polionexcontroller', ['$scope','$http', 'polionexChartService', polionexcontroller ]);
