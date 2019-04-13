app.controller('SampleController',function($scope,$http,$window,$location,LoginProvider,CONSTANT)
{
    $scope.invalid = false;
    $scope.emailFormat = /(?!.*?--)(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)/;
    $scope.token = {};
    $scope.validID = false;
    $scope.Login = function()
    {
        console.log('login');
        var params = {
                    'email' : $scope.email,
                    'password' : $scope.password
                };


        LoginProvider.doLogin(params)
            .success(function(data) {
                localStorage.setItem("token", data.token);
                $scope.invalid = false;
                $scope.token = data.token;
                if(data.admin==1)
                {
                    //$window.location.href = CONSTANT.ADMIN_HOME;
                }
                else
                {
                    //$window.location.href = CONSTANT.HOME_URL;
                }
                
            })
            .error(function(error) {
                $scope.invalid = true;
                console.log(error);
            });
    };

});
