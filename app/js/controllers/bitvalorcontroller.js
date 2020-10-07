var app = require('../manager-module.js');

app.controller('bitvalorcontroller', ['$scope','$http', function($scope, $http, bitvalorChartService) {

    var dataChart = [];
    var domain = "http://calculadorabitcoin.com.br/";
    var root_path = "backend/src/ws/services/bitvalor/";

    $http.get( domain + root_path + "bitvalor_services.php" ).then(function(response) {
      var databitvalor = response.data;
      $scope.bitvalor = databitvalor;

      console.log(databitvalor);
      let labels = [];
      let datagraph = [];
      for (let data of Object.keys(databitvalor)) {
        console.log(data);                
        labels.push(data);
        datagraph.push(databitvalor[data]['last'])
      }

      console.log(labels);
      console.log(datagraph);

      $scope.labels = labels;
      $scope.data = datagraph;
      
    });
  }]);
