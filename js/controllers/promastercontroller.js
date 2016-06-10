var app = require('../manager-module.js');

app.controller('polionexcontroller', ['$scope','$http', 'exchange', function($scope, $http, exchange) {
    $scope.exchangeservice = exchange;

    $http.get("services/promaster_services.php").then(function(response) {
      $scope.doge = response.data;
    });

  }])
  .factory('exchange', ['$http', function($http) {
    console.log($http);
    return "hello";
  }]);
