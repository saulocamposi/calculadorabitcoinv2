var app = require('../manager-module.js');

app.controller('bitvalorcontroller', ['$scope','$http', 'bitvalorChartService', function($scope, $http, bitvalorChartService) {

    var dataChart = [];
    var root_path = "backend/src/ws/services/bitvalor/";

    $http.get(root_path + "bitvalor_services.php").then(function(response) {
      var databitvalor = response.data;
      $scope.bitvalor = databitvalor;

      dataChart.push({"c" : [{"v" : "ArenaBitcoin", "f": null},{"v" : databitvalor.ARN.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "Bitcointoyou", "f": null},{"v" : databitvalor.B2U.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "BaseBit", "f": null},{"v" : databitvalor.BTD.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "FOXBIT", "f": null},{"v" : databitvalor.FOX.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "Flowbtc", "f": null},{"v" : databitvalor.FLW.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "MercadoBitcoin", "f": null},{"v" : databitvalor.MBT.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "Negociecoins", "f": null},{"v" : databitvalor.NEG.last, "f": null}]});
      dataChart.push({"c" : [{"v" : "Localbitcoins", "f": null},{"v" : databitvalor.LOC.last, "f": null}]});
    });

    bitvalorChartService.data.rows = dataChart;
    $scope.chart = bitvalorChartService;

  }]);
