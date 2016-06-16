var app = require('../manager-module.js');

app.controller('walletfoxbitcontroller', ['$scope', '$http', function($scope, $http) {

  $http.get("services/walletfoxbit_cold_services.php").then(function(response) {
    $scope.wfoxcold = response.data;
  });

  $http.get("services/walletfoxbit_hot_services.php").then(function(response) {
    $scope.wfoxhot = response.data;
  });

}]);
