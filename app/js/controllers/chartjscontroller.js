var app = require('../manager-module.js');

app.controller('chartjscontroller', ['$scope', function($scope) {

$scope.labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
$scope.data = [0, 10, 5, 2, 20, 30, 45];
  }]);
