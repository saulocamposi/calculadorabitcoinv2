var app = require('../manager-module.js');

app.controller('polionexcontroller', ['$scope','$http', 'polionexChartService', function($scope, $http, polionexChartService) {

    var dataChart = [];

    $http.get("services/doge_polionex_services.php").then(function(response) {
      var doge = response.data;
      $scope.doge = doge;
      dataChart.push({"c" : [{"v" : "Doge", "f": null},{"v" : doge.volume, "f": null}]});
    });

    $http.get("services/dash_polionex_services.php").then(function(response) {
      var dash = response.data;
      $scope.dash = dash;
      dataChart.push({"c" : [{"v" : "Dash", "f": null},{"v" : dash.volume, "f": null}]});
    });

    $http.get("services/lite_polionex_services.php").then(function(response) {
      var lite = response.data;
      $scope.lite = lite;
      dataChart.push({"c" : [{"v" : "Lite", "f": null},{"v" : lite.volume, "f": null}]});
    });

    $http.get("services/ether_polionex_services.php").then(function(response) {
      var ether = response.data;
      $scope.ether = ether;
      dataChart.push({"c" : [{"v" : "FoxBit", "f": null},{"v" : ether.volume, "f": null}]});
    });

    polionexChartService.data.rows = dataChart;
    $scope.chart = polionexChartService;
  }]);
