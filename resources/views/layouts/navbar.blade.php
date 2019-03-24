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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/design.jpg" class="img-circle" style="height: 20px; margin-right: 10px;"/>{{ Auth::user()->full_name }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
                @if(Session::get('is_superadmin_account')>0)
                <li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                @endif
                <li><a href="{{ url('/profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Prof123ile</a></li>
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