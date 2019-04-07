@extends('layouts.app')
@section('title', 'View Product') 
@section('content')
<style type="text/css">
	@media (min-width: 1200px){
.container {
    width: 1370px;

  }
}
.breadcrumb
{
	float:unset !important;
	position: unset !important;
}
</style>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/view-product.css') }}">

<div class="container">
	<div class="row">
		<div class="col">
			<section class="content-header">
				<ol class="breadcrumb">
					<li><a href="/selling"><i class="fa fa-dashboard"></i> Selling</a></li>
					<li class="active">General Elements</li>
				</ol>
			</section>
		</div>
	</div>
</div>
<div class="container">
	<div class="box box-default">
		<div class="box-body">
			<div class="row">
				<div class="col-md-4" style="margin: 10px 0px 10px 0px;">
					<div class="">
						<div class="showw" href="https://placeimg.com/1000/1000/animals">
							<img src="https://placeimg.com/1000/1000/animals" id="show-img" class="img-responsive"/>
						</div>
						<div class="small-img">
							<span class="icon-left" alt="" id="prev-img"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
							<div class="small-container">
								<div id="small-img-roll">
									<img src="https://placeimg.com/1000/1000/animals" class="show-small-img img-responsive" alt="">
									<img src="https://placeimg.com/1000/1000/arch" class="show-small-img" alt="">
									<img src="https://placeimg.com/1000/1000/nature" class="show-small-img" alt="">
									<img src="https://placeimg.com/1000/1000/people" class="show-small-img" alt="">
									<img src="https://placeimg.com/1000/1000/tech" class="show-small-img" alt="">
									<img src="https://picsum.photos/1000/1000/?random" class="show-small-img" alt="">
								</div>
							</div>
							<span class="icon-right" alt="" id="next-img"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-5" style="min-height: 400px; position:relative;">
					<div class="row">
						<div class="col-md-12">
							<h1 style="float:left;">Title Product</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<span class="label label-success">Available</span>
							<span class="monospaced">No. 1960140180</span>
						</div>
					</div>
					<div class="row" style="border-bottom: 1px solid #e5e3db; padding-bottom:20px;">
						<div class="col-md-12">
							<div class="product-description-price">
								<div class="rating" style="float:left; display: inline;">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="color: black">(Reviews) | Comments (10)</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 30px; color: #ff5f02 !important;">₱129.00</span>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6"><a href="#" class="cbtn btn-primary btn-block" style="font-size: 14px;"><i class="fa fa-heart" aria-hidden="true"></i> &nbsp;Add to Wishlist</a></div>
								<div class="col-md-6"><a href="#" class="cbtn btn-success btn-block" style="font-size: 14px;"><i class="fa fa-weixin" aria-hidden="true"></i> &nbsp;Chat</a></div>
							</div>
						</div>
						</div><!-- end row -->
					</div>
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
						<div class="row">
							<div class="col-md-12" style="border-bottom: 1px solid #eff0f5; padding-top: 10px; padding-bottom:10px;">
								<span class="location-a">Payment Method</span>
								<div class="location">
									<i class="location-image fa fa-money" aria-hidden="true"></i>
									<div class="location-address">
										Cash on Delivery
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="box box-default">
				<div class="box-body">
					<div class="tabbable-panel">
						<div class="tabbable-line">
							<ul class="nav nav-tabs ">
								<li class="active">
									<a href="#tab_default_1" data-toggle="tab">
									Product Description </a>
								</li>
								<li>
									<a href="#tab_default_2" data-toggle="tab">
									Comments </a>
								</li>
								<li>
									<a href="#tab_default_3" data-toggle="tab">
									Product Reviews </a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_default_1">
									
									<p>
										I'm in Tab 1.
									</p>
									<div class="media">
										<div class="media-left">
											<a href="#">
												<img src="avatar-tiny.jpg" class="media-object img-circle" alt="Sample Image">
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Jhon Carter <small><i>Posted on January 10, 2014</i></small></h4>
											<p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
											<img src="../images/products/3.jpg" width="150" height="150"/>
										</div>
									</div>
									<p>
										<a class="btn btn-success" href="http://j.mp/metronictheme" target="_blank">
											Learn more...
										</a>
									</p>
								</div>
								<div class="tab-pane" id="tab_default_2">
									<!-- COMMENT HERE -->
									<div class="row">
										<div class="col-md-12">
											<div class="widget-area">
												<div class="status-upload">
													<form>
														<textarea placeholder="Add Comment" class="commentbox" id="summernote"></textarea>
														
													<button type="submit" class="btn btn-success pull-right"><i class="fa fa-share"></i> Submit</button>
												</form>
												</div><!-- Status Upload  -->
												<h2 class="page-header">Comments</h2>
												<section class="comment-list">
													<!-- First Comment -->
													<article class="row">
														<div class="col-md-2 col-sm-2 hidden-xs">
															<figure class="thumbnail">
																<img class="img-responsive" src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png" />
																<figcaption class="text-center">username</figcaption>
															</figure>
														</div>
														<div class="col-md-10 col-sm-10">
															<div class="panel panel-default arrow left">
																<div class="panel-body">
																	<header class="text-left">
																		<div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
																		<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
																	</header>
																	<div class="comment-post">
																		<p>
																			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
																		</p>
																	</div>
																	<p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
																</div>
															</div>
														</div>
													</article>
												</section>
												</div><!-- Widget Area -->
											</div>
										</div>
										<!-- END COMMENT -->
									</div>
									<div class="tab-pane" id="tab_default_3">
										<p>
											Howdy, I'm in Tab 3.
										</p>
										<p>
											Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										</p>
										<p>
											<a class="btn btn-info" href="http://j.mp/metronictheme" target="_blank">
												Learn more...
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<div class="box box-default">
				<div class="box-body">
						test
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

@endsection
@section('js')
<script src="{{ URL::asset('js/zoom-image.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script type="text/javascript">
	var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
@endsection