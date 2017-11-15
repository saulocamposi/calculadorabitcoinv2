var app = require('../manager-module.js');

app.controller('bitvalorcontroller', ['$scope','$http', function($scope, $http) {

    var root_path = "backend/src/ws/services/bitvalor/";

    $http.get(root_path + "bitvalor_services.php").then(function(response) {
      $scope.bitvalor = response.data;
    });

  }]);
