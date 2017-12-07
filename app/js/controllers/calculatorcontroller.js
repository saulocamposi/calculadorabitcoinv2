var app = require('../manager-module.js');

app.controller('calculatorcontroller',  ['$scope','$http', 'blinktradeService', function( $scope, $http, blinktradeService ) {


    blinktradeService.async().then(function(d) {
     $scope.serviceFox = d;
     console.log("service fox");
     console.log(d);
     $scope.brlref = d.data.last;
    });



    $scope.btcReference = function(){

    }

    $scope.btcQtd = function(){
      $scope.bitcoin = parseFloat($scope.brl) / parseFloat($scope.brlref);
    }

    $scope.fiatCurrency = function(){
      $scope.brl = parseFloat($scope.bitcoin) * parseFloat($scope.brlref);
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
