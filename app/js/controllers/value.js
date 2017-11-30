var app = require('../manager-module.js');

var mbCtrl = function($scope, $http, foxbitservice) {

$scope.foxbitservice = foxbitservice;

/*
  $http.get(root_path + "youtube-search.php").then(function(response) {
    $scope.dailydecrypt = response.data;
  });

*/

  $scope.viewCalculator = function(value) {
    $scope.viewCalc = value;
  }
}


/*
app.directive('myYoutube', function($sce) {
  return {
    restrict: 'EA',
    scope: {
      code: '='
    },
    replace: true,
    template: '<iframe style="overflow:hidden;width=100%;height=100%;margin-left:6%" width="560" height="315" src="{{url}}" frameborder="0" allowfullscreen></iframe>',
    link: function(scope) {
      console.log('here');
      scope.$watch('code', function(newVal) {
        if (newVal) {
          scope.url = $sce.trustAsResourceUrl("http://www.youtube.com/embed/" + newVal);
        }
      });
    }
  };
});
*/

app.controller('mbCtrl', ['$scope', '$http', mbCtrl ]);
