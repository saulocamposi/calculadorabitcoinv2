var app = require('../manager-module.js');

app.controller('bitinkacontroller', ['$scope','$http','bitinkaChartService', function($scope, $http, bitinkaChartService) {
 var dataChart = [];

    $http.get("app/services/bitinka_services.php").then(function(response) {
      var bitinka = response.data;
      $scope.bitinka = bitinka;

      var usd = bitinka.usdbtc[0];
      var bsf = bitinka.bsfbtc[0];
      var ars = bitinka.arsbtc[0];
      var pen = bitinka.penbtc[0];
      var bob = bitinka.bobbtc[0];
      var brl = bitinka.brlbtc[0];
      var cop = bitinka.copbtc[0];

      dataChart.push({"c" : [{"v" : "USD", "f": null},{"v" : usd, "f": null}]});
      dataChart.push({"c" : [{"v" : "BSF", "f": null},{"v" : bsf, "f": null}]});
      dataChart.push({"c" : [{"v" : "ARS", "f": null},{"v" : ars, "f": null}]});
      dataChart.push({"c" : [{"v" : "PEN", "f": null},{"v" : pen, "f": null}]});
      dataChart.push({"c" : [{"v" : "BOB", "f": null},{"v" : bob, "f": null}]});
      dataChart.push({"c" : [{"v" : "BRL", "f": null},{"v" : brl, "f": null}]});
      dataChart.push({"c" : [{"v" : "COP", "f": null},{"v" : cop, "f": null}]});


    });

    bitinkaChartService.data.rows = dataChart;
    $scope.chart = bitinkaChartService;

  }]);
