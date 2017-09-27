var app = require('../manager-module.js');

app.controller('blinktradecontroller', ['$scope', '$http', 'blinktradeChartService', function($scope, $http, blinktradeChartService) {

   var dataChart = [];

   var root_path = "backend/src/ws/services/";

   var urlfox = root_path + "blinktrade_fox_services.php";
   var urlsur = root_path + "blinktrade_sur_services.php";
   var urlchile = root_path + "blinktrade_chile_services.php";
   var urlurdu = root_path + "blinktrade_urdu_services.php";


  $http.get(urlfox).then(function(response) {
     var dataFox = response.data;
     dataChart.push({"c" : [{"v" : "FoxBit", "f": null},{"v" : dataFox.vol, "f": null}]});
     $scope.foxbit = dataFox;
  });


  $http.get(urlsur).then(function(response) {
    var dataSurbitcoin = response.data;
    dataChart.push({"c" : [{"v" : "SurBitcoin", "f": null},{"v" : dataSurbitcoin.vol, "f": null}]});
    $scope.surbitcoin = dataSurbitcoin;
  });

  $http.get(urlchile).then(function(response) {
    var datachilebit = response.data;
    dataChart.push({"c" : [{"v" : "Chilebit", "f": null},{"v" : datachilebit.vol, "f": null}]});
    $scope.chilebit = datachilebit;
  });

  $http.get(urlurdu).then(function(response) {
    var dataUrdubit = response.data;
    dataChart.push({"c" : [{"v" : "Urdubit", "f": null},{"v" : dataUrdubit.vol, "f": null}]});
    $scope.urdubit = dataUrdubit;
  });

  blinktradeChartService.data.rows = dataChart;
  $scope.chart = blinktradeChartService;

  //$scope.brlref = parseInt($scope.foxbit.last);

}]);
