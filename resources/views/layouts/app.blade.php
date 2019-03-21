<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <style>
        
    #noti_Container {
        position:relative;
    }
       
    /* A CIRCLE LIKE BUTTON IN THE TOP MENU. */
    #noti_Button {
        width:22px;
        height:22px;
        line-height:22px;
        border-radius:50%;
        -moz-border-radius:50%; 
        -webkit-border-radius:50%;
        background:#FFF;
        margin:3px 10px 0 10px;
        cursor:pointer;
    }
        
    /* THE POPULAR RED NOTIFICATIONS COUNTER. */
    #noti_Counter {
        display:block;
        position:absolute;
        background:#E1141E;
        color:#FFF;
        font-size:12px;
        font-weight:normal;
        padding:1px 3px;
        margin:-8px 0 0 25px;
        border-radius:2px;
        -moz-border-radius:2px; 
        -webkit-border-radius:2px;
        z-index:1;
    }
        
    /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #notifications {
        margin-right: -60px;
        display:none;
        width:490px;
        position:absolute;
        /*top:30px;*/
            top: 50px;
        right:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 0;
    }
    /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
    #notifications:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:398px;
    }
        
    h3 {
        display:block;
        color:#333; 
        background:#FFF;
        font-weight:bold;
        font-size:13px;    
        padding:8px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }
        
    .seeAll {
        background:#F6F7F8;
        padding:8px;
        font-size:12px;
        font-weight:bold;
        border-top:solid 1px rgba(100, 100, 100, .30);
        text-align:center;
    }
    .seeAll a {
        color:#3b5998;
    }
    .seeAll a:hover {
        background:#F6F7F8;
        color:#3b5998;
        text-decoration:underline;
    }
@media (min-width: 1200px) {
  .container {
    width: 100%;
  }
}
</style>
</head>
<body id="app-layout" style="background-color: #eff0f5;">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span><img src="https://i.imgur.com/TpWQH9c.png" height="24"/></span> sketch<span class="text-danger">U</span>cation</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li class=""><a href="/" style="text-align: center;">Home</a></li>
        <li class=""><a href="/" style="text-align: center;">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
        <li>
            <p class="navbar-btn">
                <a href="{{ url('/login') }}" class="btn btn-success btn-block outline">Sign in!</a>
            </p>
        </li>
        <li>&nbsp;</li>
        <li>
            <p class="navbar-btn">
                <a href="{{ url('/register') }}" class="btn btn-danger outline btn-block">Create Account!</a>
            </p>
        </li>
        @else
        <li class="dropdown" style="text-align: center;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #FF5722;">
                <i class="fa fa-user" aria-hidden="true"></i></i><span class="badge bellball" style="background-color: #43e4d7; color:#2b3648;"></span>
            </a>
            <ul class="dropdown-menu notf" style="padding-top: 15px;width: 100px; max-height: 300px; overflow: auto;">
                <li class="">
                    <a href="#" style="padding: 0px;">
                        <div class="row" style="border-bottom: 1px solid #e1e1e1; margin:0; padding: 5px 3px">
                            <div class="col-md-2" style=" padding-right:0; padding-top: 5px">
                                <img class="" src="{{ asset('uploads/sample.png') }}" style="max-height:40px;">
                            </div>

                            <div class="col-md-10">
                                <span style="font-size: 11px; font-weight: normal;">Announcement</span>
                                <h6 style="font-size: 11px;"><b>testing</b></h6>
                                <span class="pull-right text-muted" style="font-weight: normal; font-size: 9px; padding: 0px; margin: 0px;"></span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            
        </li>
        <li class="dropdown" style="text-align: center;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #FF5722;">
                <i class="fa fa-envelope" aria-hidden="true"></i><span class="badge bellball" style="background-color: #43e4d7; color:#2b3648;"></span>
            </a>
            <ul class="dropdown-menu notf" style="padding-top: 15px;width: 100px; max-height: 300px; overflow: auto;">
                <li class="">
                    <a href="#" style="padding: 0px;">
                        <div class="row" style="border-bottom: 1px solid #e1e1e1; margin:0; padding: 5px 3px">
                            <div class="col-md-2" style=" padding-right:0; padding-top: 5px">
                                <img class="" src="{{ asset('uploads/sample.png') }}" style="max-height:40px;">
                            </div>

                            <div class="col-md-10">
                                <span style="font-size: 11px; font-weight: normal;">Announcement</span>
                                <h6 style="font-size: 11px;"><b>testing</b></h6>
                                <span class="pull-right text-muted" style="font-weight: normal; font-size: 9px; padding: 0px; margin: 0px;"></span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown" style="text-align: center;" id="noti_Container">
            <a href="#" class="dropdown-toggle testt" data-toggle="dropdown" style="color: #FF5722;">
                <i class="fa fa-bell"></i><span class="badge bellball" style="background-color: #43e4d7; color:#2b3648;"></span>
            </a>
            <ul class="dropdown-menu notf" style="padding-top: 15px;width: 100px; max-height: 300px; overflow: auto;">
                <li class="">
                    <a href="#" style="padding: 0px;">
                        <div class="row" style="border-bottom: 1px solid #e1e1e1; margin:0; padding: 5px 3px">
                            <div class="col-md-2" style=" padding-right:0; padding-top: 5px">
                                <img class="" src="{{ asset('uploads/sample.png') }}" style="max-height:40px;">
                            </div>

                            <div class="col-md-10">
                                <span style="font-size: 11px; font-weight: normal;">Announcement</span>
                                <h6 style="font-size: 11px;"><b>testing</b></h6>
                                <span class="pull-right text-muted" style="font-weight: normal; font-size: 9px; padding: 0px; margin: 0px;"></span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <div id="notifications">
                <h3>Notifications</h3>
                <div style="height:300px;">
                   <div class="row" style="border-bottom: 1px solid #e1e1e1; margin:0; padding: 5px 3px">
                    <div class="col-md-2" style=" padding-right:0; padding-top: 5px">
                        <img class="" src="{{ asset('uploads/sample.png') }}" style="max-height:40px;">
                    </div>

                    <div class="col-md-10">
                        <span style="font-size: 11px; font-weight: normal;">Announcement</span>
                        <h6 style="font-size: 11px;"><b>testing</b></h6>
                        <span class="pull-right text-muted" style="font-weight: normal; font-size: 9px; padding: 0px; margin: 0px;"></span>
                    </div>
                </div>
            </div>
            <div class="seeAll"><a href="#">See All</a></div>
        </div>
        <li><button type="button" class="btn btn-danger outline btn-block btn-margin-right navbar-btn btn-block" onclick="location.href='{{ url('/sell-product') }}'"><i class="fa fa-shopping-bag" aria-hidden="true"></i> &nbsp;Sell Products</button>
        </li>
        <li class="dropdown" style="text-align: center;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/design.jpg" class="img-circle" style="height: 20px; margin-right: 10px;"/>{{ Auth::user()->first_name }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> My Wishlist</a></li>
                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Account Settings</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
            </ul>
        </li>
        @endif
    </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

@yield('content')

<!-- JavaScripts -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>  
<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>  
<!-- <script src="{{ URL::asset('js/angular.min.js') }}"></script>   -->
<!-- <script src="{{ URL::asset('js/app.js') }}"></script>  -->
<!-- <script src="{{ URL::asset('js/controllers.js') }}"></script>  -->
<!-- <script src="{{ URL::asset('js/constants.js') }}"></script>  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
<script type="text/javascript">

$(document).ready(function() {
    var table = $('#table_id').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
    $('#summernote').summernote({
      height: 200,
      minHeight: null,
      maxHeight: null
        });
});

</script>
</body>
</html>
