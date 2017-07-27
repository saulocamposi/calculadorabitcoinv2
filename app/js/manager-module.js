var app = angular.module('calcbtc', ['ngRoute','googlechart','cgBusy','ngAnimate']).
  config(['$httpProvider',function($httpProvider){
    $httpProvider.defaults.timeout = 1000;
  }]);

module.exports = app;
