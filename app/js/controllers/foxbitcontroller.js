var app = require('../manager-module.js');

app.controller('foxbitcontroller', ['$scope','$http', function($scope, $http) {

    $http.get("app/services/orders_foxbit_services.php").then(function(response) {
      $scope.foxbitorders = response.data;
    });

    $http.get("app/services/trades_foxbit_services.php").then(function(response) {
      $scope.foxbittrades = response.data;
    });

  }]);
