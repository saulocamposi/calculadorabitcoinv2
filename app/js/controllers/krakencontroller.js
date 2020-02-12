var app = require('../manager-module.js');

app.controller('krakencontroller', ['$scope','$http', function($scope, $http) {

    var dataChart = [];

    var root_path = "backend/src/ws/services/kraken/";


    $http.get(root_path + "kraken-task-select.php").then(function(response) {
      var ticker = response.data;
      $scope.tickerpoloniex = ticker;
    });

  }]);
