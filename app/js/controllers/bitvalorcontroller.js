var app = require('../manager-module.js');

app.controller('bitvalorcontroller', ['$scope','$http', 'bitvalorChartService', function($scope, $http, bitvalorChartService) {

    var dataChart = [];
    var root_path = "backend/src/ws/services/bitvalor/";

    $http.get(root_path + "bitvalor_services.php").then(function(response) {
      var databitvalor = response.data;
      $scope.bitvalor = databitvalor;


      if (databitvalor.ARN){
        dataChart.push({"c" : [{"v" : "ArenaBitcoin", "f": null},{"v" : databitvalor.ARN.last, "f": null}]});
      }

      if (databitvalor.FOX) {
        dataChart.push({"c" : [{"v" : "FOXBIT", "f": null},{"v" : databitvalor.FOX.last, "f": null}]});
      }

      if (databitvalor.B2U) {
        dataChart.push({"c" : [{"v" : "Bitcointoyou", "f": null},{"v" : databitvalor.B2U.last, "f": null}]});
      }

      if (databitvalor.BTD) {
        dataChart.push({"c" : [{"v" : "BaseBit", "f": null},{"v" : databitvalor.BTD.last, "f": null}]});
      }

      if (databitvalor.FLW) {
        dataChart.push({"c" : [{"v" : "Flowbtc", "f": null},{"v" : databitvalor.FLW.last, "f": null}]});
      }

      if (databitvalor.MBT) {
        dataChart.push({"c" : [{"v" : "MercadoBitcoin", "f": null},{"v" : databitvalor.MBT.last, "f": null}]});
      }

      if (databitvalor.NEG) {
        dataChart.push({"c" : [{"v" : "Negociecoins", "f": null},{"v" : databitvalor.NEG.last, "f": null}]});
      }

      if (databitvalor.LOC) {
        dataChart.push({"c" : [{"v" : "Localbitcoins", "f": null},{"v" : databitvalor.LOC.last, "f": null}]});
      }

    });

    bitvalorChartService.data.rows = dataChart;
    $scope.chart = bitvalorChartService;

  }]);
