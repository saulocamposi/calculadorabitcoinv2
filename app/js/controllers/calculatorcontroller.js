var app = require('../manager-module.js');

app.controller('calculatorcontroller', ['$scope','$http', function( $scope, $http ) {



    $scope.brlref = 10;

    $scope.btcReference = function(){
      console.log("btcReference");
      console.log("calculatorcontroller");
    }

    $scope.btcQtd = function(){
      console.log("btcQtd");
    }

    $scope.fiatCurrency = function(){
      console.log("fiatCurrency");
    }


    $scope.averageBTC = function(){
    //{{}}(brlref + mtc.ticker.last + foxbit.last + btctoyou.ticker.last + negociecoins.last) / 4
      numbersofexchange = 10;
      //foxbitlast = $scope.foxbit.last >= 0 ? $scope.foxbit.last : 0 ;
      //mtclast = $scope.mtc.last >= 0 ? $scope.mtc.last : 0 ;
      //btctoyoulast = $scope.btctoyou.ticker.last >= 0 ? $scope.btctoyou.ticker.last : 0 ;
      //negociecoinslast  = $scope.negociecoins.last >= 0 ? $scope.negociecoins.last : 0 ;
      //sumof = foxbitlast + mtclast + btctoyoulast + negociecoinslast;
      //$scope.brlref =  sumof / 10;
      console.log($scope);
      $scope.brlref = 10;
  }

  }]);
