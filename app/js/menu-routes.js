var app = require('./manager-module.js');

var routes = function($routeProvider, $locationProvider){
  $routeProvider
         // route for the bitcoincalculator page
         .when('/', {
             templateUrl : 'app/tpl/pages/cards_lab.html',
         })
         // route for the satoshicalculator page
           .when('/hotwallets', {
               templateUrl : 'app/tpl/pages/hotwallets.html'
           })
           // route for the bitcalculator page
             .when('/orders', {
                 templateUrl : 'app/tpl/pages/orders.html'
             })
             // route for the btc calc income page
               .when('/trades', {
                   templateUrl : 'app/tpl/pages/trades.html'
               });
               // use the HTML5 History API
       $locationProvider.html5Mode(true);
}
app.config(routes);
