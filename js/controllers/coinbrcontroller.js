var app = require('../manager-module.js');

app.controller('coinbrcontroller', ['$scope','$http', function($scope, $http) {

  $http.get("services/services.php?brand=coinbr").then(function(response) {
    $scope.coinbr = response.data;
  });  

  }]);
