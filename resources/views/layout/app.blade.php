<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    
    <script src="{{ URL::asset('js/jquery.js') }}"></script>  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">Column</a>
                </li>
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- js -->

    <script src="{{ URL::asset('js/angular.min.js') }}"></script>  
    <script src="{{ URL::asset('js/app.js') }}"></script> 
    <script src="{{ URL::asset('js/controllers.js') }}"></script> 
    <script src="{{ URL::asset('js/constants.js') }}"></script> 
    




</body>

</html>
