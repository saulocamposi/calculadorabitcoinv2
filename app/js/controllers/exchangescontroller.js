var app = require('../manager-module.js');

app.controller('exchangescontroller', ['$scope','$http', 'exchangesChartService', function($scope, $http, exchangesChartService) {

  var dataChart = [];

    $http.get("backend/ws/services/services.php?brand=fox").then(function(response) {
      var datafoxbit = response.data;
      dataChart.push({"c" : [{"v" : "FoxBit", "f": null},{"v" : datafoxbit.last, "f": null}]});
      $scope.foxbit = datafoxbit;
    });

    $http.get("backend/ws/services/services.php?brand=mtc").then(function(response) {
      var datamtc = response.data;
      dataChart.push({"c" : [{"v" : "MTC", "f": null},{"v" : datamtc.last, "f": null}]});
      $scope.mtc = datamtc;
    });

    $http.get("backend/ws/services/services.php?brand=btctoyou").then(function(response) {
      var databtctoyou = response.data;
      dataChart.push({"c" : [{"v" : "btctoyou", "f": null},{"v" : databtctoyou.last, "f": null}]});
      $scope.btctoyou = databtctoyou;
    });

    $http.get("backend/ws/services/services.php?brand=flowbtc").then(function(response) {
      var dataflowbtc = response.data;
      dataChart.push({"c" : [{"v" : "flowbtc", "f": null},{"v" : dataflowbtc.last, "f": null}]});
      $scope.flowbtc = dataflowbtc;
    });

    $http.get("backend/ws/services/services.php?brand=negociecoins").then(function(response) {
      var datanegociecoins = response.data;
      dataChart.push({"c" : [{"v" : "negociecoins", "f": null},{"v" : datanegociecoins.last, "f": null}]});
      $scope.negociecoins = datanegociecoins;
    });

    exchangesChartService.data.rows = dataChart;
    $scope.chart = exchangesChartService;


  }]);
