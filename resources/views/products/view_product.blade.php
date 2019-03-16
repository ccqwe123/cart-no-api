@extends('layouts.app')
@section('title', 'View Product') 
@section('content')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<style type="text/css">
	.rating 
  {
    color: #faca51;
  text-decoration: none;
  font-size: 11px;
  line-height: 20px;
  }
  .cbtn {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.custom-button {
     color: #fff; 
     background-color: #f0ad4e; 
     border-color: #eea236; 
}
.btn-warning {
color: #fff;
background-color: #f0ad4e;
border-color: #eea236;
}
.btn-primary {
color: #fff;
background-color: #428bca;
border-color: #357ebd;
}
.btn-success {
color: #fff;
background-color: #5cb85c;
border-color: #4cae4c;
}
.btn-warning:hover, .btn-success:hover, .btn-primary:hover {
text-decoration: none;
}
.btn-warning:visited, .btn-success:visited, .btn-primary:visited
{
	text-decoration: none;
}
.btn-warning:link, .btn-success:link, .btn-primary:link
{
	text-decoration: none;
}
.media
{
	padding:10px;
}
.thumbs {
	margin-top:10px;
    display: inline-block;
    vertical-align: top;
}

.thumbs img {
    /*display: block;*/
}
.product-gallery
{
	padding-top:10px;
}
.wishlistbtn
{
	border: none;
	background-color: transparent;
	position: absolute;
	right: 30px;
	top: 20px;
	/*left: 0;*/
	font-size: 25px;
	float: right;

}
.wishlistbtn i:hover
{
	color:red;
}
.wishlistbtn:focus
{
	outline:0;
}
.location-a
{
	display: table-cell;
    font-size: 15px;
    color: #757575;
    font-weight: 500;
    font-family: Roboto-Medium;
    width: 300px;
}
.location-image
{
	padding-right: 10px;
    display: table-cell;
    vertical-align: middle;
    width: 24px;
}
.location
{
	display: table;
    width: 100%;
    align-items: center;
}
.location-address
{
	max-width: 180px;
    word-break: break-word;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<div class="container" style="background-color: white;">
	<div class="row">
		<div class="col-md-4">
			<div class="product-gallery">
				<img id="main" src="../images/design.jpg" class="img-responsive" style="height: 270px; width: 100%;"/>
			</div>
			<div class="thumbs">
				<img src="../images/products/1.jpg" width="50" height="50"/>
				<img src="../images/products/2.jpg" width="50" height="50"/>
				<img src="../images/products/3.jpg" width="50" height="50"/>
				<img src="../images/products/3.jpg" width="50" height="50"/>
			</div>
		</div>
		<div class="col-md-5" style="min-height: 400px;">
			<div class="row">
				<div class="col-md-12">
					<h1 style="float:left;">Title Product</h1>
					<div>
						<button class="wishlistbtn" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<span class="label label-success">Available</span>
					<span class="monospaced">No. 1960140180</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="description">
						Classic film camera. Uses 620 roll film.
						Has a 2&frac14; x 3&frac14; inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.inch image size.
					</p>
				</div>
			</div>
			<div class="row" style="border-bottom: 1px solid #e5e3db;">
				<div class="col-md-6">
					<div class="product-description-price">
							<div class="rating" style="float:left; display: inline;">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span style="color: black">(Reviews) | Comments (10)</span>
						</div>
					</div><br>
					<span style="color:gray;">
					Brand: Toshiba</span>
				</div>
				<div class="col-md-6 text-center">
					<span style="font-size: 30px; display:inline;">₱129.00</span>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6"><a href="#" class="cbtn btn-primary btn-block" style="font-size: 14px;"><i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Messenger</a></div>
						<div class="col-md-6"><a href="#" class="cbtn btn-success btn-block" style="font-size: 14px;"><i class="fa fa-weixin" aria-hidden="true"></i> &nbsp;Chat</a></div>
					</div>
				</div>
			</div><!-- end row -->
		</div>
		<!-- <div class="col-md-3" style="background-color:#fafafa;"> -->
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12" style="border-bottom: 1px solid #eff0f5;">
					<div class="media">
						<a class="pull-left" href="#" style="margin-right:10px;">
							<img class="img-circle" src="../images/user/user.jpg" style="width: 70px;height:70px;">
						</a>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 0px !important">Hardik Sondagar</h4>
							<h5>CP #: 09182029210</h5>
							<hr style="margin:8px auto">

							<a href="#"><span class="label label-default fa fa-plus"> Add Friend</span></a>
							<span class="label label-danger">Report</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="border-bottom: 1px solid #eff0f5; padding-top: 10px; padding-bottom:10px;">
					<span class="location-a">Location</span>
					<div class="location">
						<i class="location-image fa fa-map-marker" aria-hidden="true"></i>
						<div class="location-address">
								Metro Manila~Quezon City, Quezon City, Project 6
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="border-bottom: 1px solid #eff0f5; padding-top: 10px; padding-bottom:10px;">
					<span class="location-a">Return Product</span>
					<div class="location">
						<i class="location-image fa fa-thumbs-up" aria-hidden="true"></i>
						<div class="location-address">
								7 Days Return 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" style="background-color: white; margin-top:10px;">
	<div class="row">
		<div class="col-md-12">
			Comment
		</div>
	</div>
</div>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.thumbs img').hover(function() {
			var url = $(this).attr('src');
			$('#main').attr('src', url);
		});
	})
</script>
@endsection