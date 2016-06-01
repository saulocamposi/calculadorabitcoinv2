var app = require('../manager-module.js');

app.controller('exchangecontroller', ['$scope', 'exchange', function($scope, exchange) {
    $scope.exchangeservice = exchange;
  }])
  .factory('exchange', ['$http', function($http) {
    console.log($http);
    return "hello";
  }]);
