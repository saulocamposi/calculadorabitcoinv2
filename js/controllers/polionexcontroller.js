var app = require('../manager-module.js');

app.controller('polionexcontroller', ['$scope','$http', 'exchange', function($scope, $http, exchange) {
    $scope.exchangeservice = exchange;

    $http.get("services/doge_polionex_services.php").then(function(response) {
      $scope.doge = response.data;
    });

    $http.get("services/dash_polionex_services.php").then(function(response) {
      $scope.dash = response.data;
    });

    $http.get("services/lite_polionex_services.php").then(function(response) {
      $scope.lite = response.data;
    });

    $http.get("services/ether_polionex_services.php").then(function(response) {
      $scope.ether = response.data;
    });


  }])
  .factory('exchange', ['$http', function($http) {
    console.log($http);
    return "hello";
  }]);
