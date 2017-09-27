var app = require('../manager-module.js');

app.controller('walletfoxbitcontroller', ['$scope', '$http', function($scope, $http) {

  var root_path = "backend/src/ws/services/";

  $http.get( root_path + "walletfoxbit_cold_services.php").then(function(response) {
    $scope.wfoxcold = response.data;
  });

  $http.get( root_path + "walletfoxbit_hot_services.php").then(function(response) {
    $scope.wfoxhot = response.data;
  });

}]);
