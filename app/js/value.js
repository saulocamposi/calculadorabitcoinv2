var app = require('./manager-module.js');

var mbCtrl = function($scope, $http, serviceforex) {

$scope.helloforex = serviceforex;

  var root_path = "backend/ws/services/";


  $http.get(root_path + "youtube-search.php").then(function(response) {
    $scope.dailydecrypt = response.data;
  });

  $http.get(root_path + "bitvalor_services.php").then(function(response) {
    $scope.bitvalor = response.data;
  });

  /*$http.get("services/agenciaideias_services.php").then(function(response) {
    $scope.agenciaideias = response.data;
  });*/

  $http.get( root_path + "forex_services.php").then(function(response) {
    $scope.forex = response.data;
  });

  //$scope.averageBTC = function(){
  //{{}}(brlref + mtc.ticker.last + foxbit.last + btctoyou.ticker.last + negociecoins.last) / 4
  /*numbersofexchange = 10;
    foxbitlast = $scope.foxbit.last >= 0 ? $scope.foxbit.last : 0 ;
    mtclast = $scope.mtc.last >= 0 ? $scope.mtc.last : 0 ;
    btctoyoulast = $scope.btctoyou.ticker.last >= 0 ? $scope.btctoyou.ticker.last : 0 ;
    negociecoinslast  = $scope.negociecoins.last >= 0 ? $scope.negociecoins.last : 0 ;
    sumof = foxbitlast + mtclast + btctoyoulast + negociecoinslast;
    $scope.brlref =  sumof / 10;
*/

//}

  $scope.viewCalculator = function(value) {
    $scope.viewCalc = value;
  }
}

app.controller('mbCtrl', ['$scope', '$http','serviceforex',  mbCtrl ]);

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
