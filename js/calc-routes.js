var routes = function($routeProvider){
  $routeProvider
         // route for the bitcoincalculator page
         .when('/', {
             templateUrl : 'tpl/calc/bitcoincalculator.html',
             controller  : 'mbCtrl'
         })
         // route for the satoshicalculator page
           .when('/satoshi', {
               templateUrl : 'tpl/calc/satoshicalculator.html',
               controller  : 'mbCtrl'
           })
           // route for the bitcalculator page
             .when('/bit', {
                 templateUrl : 'tpl/calc/bitcalculator.html',
                 controller  : 'mbCtrl'
             })
             // route for the btc calc income page
               .when('/income', {
                   templateUrl : 'tpl/calc/btc-calc-income.html',
                   controller  : 'mbCtrl'
               })
}

app.config(routes);
