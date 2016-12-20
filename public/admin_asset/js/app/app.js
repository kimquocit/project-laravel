var app = angular.module('my-app', []).constant('API', 'http://laravel.dev/');

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
  });

