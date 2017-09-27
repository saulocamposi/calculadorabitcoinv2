var app = require('../manager-module.js');

app.controller('foxbitcontroller', ['$scope','$http', function($scope, $http) {

    var root_path = "backend/src/ws/services/foxbit/";

    $http.get(root_path + "orders_foxbit_services.php").then(function(response) {
      $scope.foxbitorders = response.data;
    });

    $http.get(root_path + "trades_foxbit_services.php").then(function(response) {
      $scope.foxbittrades = response.data;
    });

  }]);
