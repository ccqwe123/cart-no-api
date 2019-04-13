@extends('layouts.app')
@section('title', 'Add Product') 
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400,700);

body{
    background:#e9eaed;
	}
    
h1, h2, h3, h4, h5, h6{
    font-family: 'Open Sans Condensed', sans-serif, sans-serif;
}
	
.container{
	}

.wrapper{
	}

#header{
	border:1px solid #ddd;
	margin-bottom:20px;
	}
	


	
.navbar{
	border-radius:0;
	margin-bottom:0;
	border:none;
        font-family: 'Open Sans Condensed', sans-serif, sans-serif;

	}
    
.navbar > li >a{
    
    }
	
	
.navbar-header{
	}
	
.navbar-brand2{
width:160px !important;
height:160px !important;
float:left;
padding:0 !important;
margin-top:-130px;
overflow:hidden;
border:3px solid #eee;
margin-left:15px;
background:#333;
text-align:center;
line-height:160px;
color:#fff !important;
font-size:2em;
    -webkit-transition:  all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition:  all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out ;

	}
	
	
.site-name{
	color:#fff;
	font-size:2.4em;
	float:left;
	margin-top:-65px !important;
	margin-left:15px;
        font-family: 'Open Sans Condensed', sans-serif, sans-serif;

	}	
.site-description{
	color:#fff;
	font-size:1.3em;
	float:left;
	margin-top:-30px !important;
	margin-left:15px;
	}
	
.main-menu{
	position:absolute;
	left:190px;
	}
	
.slider, .carousel{
	max-height:360px;
	overflow:hidden;
	}
	
.carousel-control .fa-angle-left,
.carousel-control .fa-angle-right {
position: absolute;
top: 50%;
font-size:2em;
z-index: 5;
display: inline-block;
}

.carousel-control{
	background-color:transparent;
	background-image:none !important;
	}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  background-color:transparent !important;
  background-image:none !important;
  outline: 0;
}
@media (max-width: 768px) {
.navbar-brand2{
    max-width: 100px;
	max-height:100px;
	float:left;
	margin-top:-65px;
	margin-left:15px;
	-webkit-transition:  all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition:  all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out ;
  }
.navbar{
	border-radius:0;
	margin-bottom:0;
	border:none;
	}
.main-menu{
	left:0;
	position:relative;
	}


}
@media (max-width: 490px) {
	.site-name{
	color:#fff;
	font-size:1.5em;
	float:left;
	line-height:20px;
	margin-top:-100px !important;
	margin-left:125px;
	}	
.site-description{
	color:#fff;
	font-size:1.3em;
	float:left;
	margin-top:-80px !important;
	margin-left:125px;
	}
	}
	[class*="col-"] {
    background-clip: padding-box;
    border: 5px solid transparent;
}
.phototitle
{
	display: table-cell;
    font-size: 18px;
    color: #757575;
    height: 15px;
    line-height: 55px;
    font-weight: 500;
    font-family: Roboto-Medium;
    width: 300px;
}
</style>
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>





<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header id="header">

					<div class="slider">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox" style="position: relative;">
<!-- 								<div class="item active">
									<img src="http://placehold.it/1200x400/F34336/F34336&text=WORDPRESS THEME DEVELOPER">
								</div> -->
								<div class="item active">
									<img src="http://placehold.it/1200x400/20BFA9/ffffff&text=CLEAN %26 SMART" width="100%">
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="fa fa-angle-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="fa fa-angle-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div><!--slider-->
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand2" href="#"><img class="img-responsive" src="../images/design.jpg"></a>
							<span class="site-name"><b>Jusko</b> Dai</span>
							<span class="site-description">Online Seller</span>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="mainNav" >
							<ul class="nav main-menu navbar-nav">
								<li><a href="#"> Timeline</a></li>
								<li><a href="#"> About</a></li>
								<li><a href="#"> Friends</a></li>
								<li><a href="#"> Photos</a></li>
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
								<li>
									<p class="navbar-btn">
										<button class="btn btn-default btn-block" style="margin-right:10px;"><i class="fa fa-user-plus" aria-hidden="true"></i> Add as Friend</button>
									</p>
								</li>
								@endif
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
		</div>
	</div>
	<div class="container-fluid">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="container" style="background-color:white; height: 350px;">
								<div class="phototitle">
									<i class="fa fa-picture-o" aria-hidden="true"></i> Photos
								</div>
							</div>
						</div>
						<div class="row">
							<div class="container" style="background-color:white; height: 350px; margin-top:10px;">
								<div class="phototitle">
									<i class="fa fa-users" aria-hidden="true"></i> Friends
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8" style="background-color:white; height: 100%;">Visitor Messages</div>
				</div>
			</div>
		</div>
</div>








<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/zoom-image.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

@endsection