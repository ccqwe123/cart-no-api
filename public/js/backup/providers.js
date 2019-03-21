app.factory('LoginProvider',function($http, CONSTANT){
    var factory = {};
    factory.doLogin = function(params){
        return factory.doPostHttpRequest(params);
    };

    factory.doPostHttpRequest = function(params){
        return $http({
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            url: CONSTANT.AUTH_URL,
            data : params
        });
    };
    return factory;
});

