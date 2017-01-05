var app = require('../manager-module.js');

var polionexcontroller = function($scope, $http, polionexChartService, googleChartApiPromise) {

    var dataChart = [];
    console.log(polionexChartService);

    $http.get("app/services/doge_polionex_services.php").then(function(response) {
      var doge = response.data;
      dataChart.push({"c" : [{"v" : "Doge", "f": null},{"v" : doge.volume, "f": null}]});
      $scope.doge = doge;
    });

    $http.get("app/services/dash_polionex_services.php").then(function(response) {
      var dash = response.data;
      dataChart.push({"c" : [{"v" : "Dash", "f": null},{"v" : dash.volume, "f": null}]});
      $scope.dash = dash;
    });

    $http.get("app/services/lite_polionex_services.php").then(function(response) {
      var lite = response.data;
      dataChart.push({"c" : [{"v" : "Lite", "f": null},{"v" : lite.volume, "f": null}]});
      $scope.lite = lite;

    });

    $http.get("app/services/ether_polionex_services.php").then(function(response) {
      var ether = response.data;
      dataChart.push({"c" : [{"v" : "FoxBit", "f": null},{"v" : ether.volume, "f": null}]});
      $scope.ether = ether;
    });

    polionexChartService.data.rows = dataChart;
    $scope.chart = polionexChartService;

    console.log(dataChart);
  }

app.controller('polionexcontroller', ['$scope','$http', 'polionexChartService', polionexcontroller ]);
