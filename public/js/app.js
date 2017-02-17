var app = angular.module("app",[], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.factory('httpRequestInterceptor', function () {
  return {
    request: function (config) {

      config.headers['Authorization'] = 'Bearer:'+localStorage.getItem('token');
      return config;
    }
  };
});

app.config(function ($httpProvider) {
  $httpProvider.interceptors.push('httpRequestInterceptor');
});
