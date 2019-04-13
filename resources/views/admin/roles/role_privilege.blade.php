@extends('layouts.app')
@section('title', 'Add Product') 
<link href="{{ URL::asset('css/summernote.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
<style type="text/css">
.prof-pic 
{
	width: 100%;
}
.manage-text
{
	text-decoration: none;
	font-size: 22px;
	font-weight: 400;
	color: #424242;
}
[class*="col-"]:not(.col-md-2) {
	background-clip: padding-box;
	border: 5px solid transparent;
}	
.caption{
	display: none;
	transition: background-color .5s;
	text-align: center;
}
.caption-cam{
	float:right;
	display:block;
	color:#fff;
	position: absolute;
	bottom: -25px;
	left: 15px;
	transition: bottom .5s;
}
.img_caption:hover .caption-cam{
	bottom: 5px;
}
.img_caption:hover .caption {
	display: block;
	height: 45px;
	width: 150px;
	background-color: #00000042;
	position: absolute;
	bottom: -5px;
	padding-top: 15px;
	color: #fff;
	cursor: pointer;
}
.caption:hover{
	background-color: #00000069 !important;
}
.navbar
{
	margin-bottom: 0px !important;
}
ul.list-unstyled li
{
	list-style-type: none;

}
li.li-wishlist a {
	text-decoration: none;
	color:#FF5722;
}
li.li-title, li.li-wishlist
{
	color: #FF5722;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
ul.list-unstyled li:not(.li-wishlist) a
{
	text-decoration: none;
	color:gray;
	margin-left: -20px;
	line-height: 25px;
	font-family: Arial, Helvetica, sans-serif;
}
ul.list-unstyled li:not(.li-wishlist) a:hover
{
	color: #FF5722;
}


h2.prod-title1391512031
{
	color: #FF5722;
	font-family: Arial, Helvetica, sans-serif;
}
label {
	margin-bottom: 0px !important;
	border: 0px !important;
}

</style>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="manage-text">Admin Panel</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-unstyled">
						<li class="li-title">Manage Users</li>
						<li>
							<ul>
								<li><a href="/admin">User List</a></li>
								<li><a href="/admin/roles">User Roles</a></li>
								<li><a href="/admin/banned-users">Banned Users</a></li>
							</ul>
						</li>
						<li class="li-title">Categories</li>
						<li>
							<ul>
								<li><a href="/admin/category">Category List</a></li>
								<li><a href="/admin/category-not-listed">Not listed Category</a></li>
							</ul>
						</li>
						<li class="li-title">Products</li>
						<li>
							<ul>
								<li><a href="/admin/products">Product List</a></li>
								<li><a href="/admin/products-sold">Sold Product's</a></li>
								<li><a href="/admin/deleted-products">Deleted Product's</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-10" style="height: 100%;">
			<div class="row">
				<div class="col-md-12" style="background-color:white; margin-top:-60px;">
					<h2 class="prod-title1391512031">Role Privileges</h2>
					@if (Session::has('flash_message'))
					<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
					@endif
					@if (Session::has('flash_error'))
					<div class="alert alert-danger">{{ Session::get('flash_error') }}</div>
					@endif
					<div class="row">
						<div class="col-md-12 table-responsive" style="height: 100%;">
							<div class="panel panel-default">
								<div class="panel-body" style="height: 450px;">
									<div class="row" style="width:80%;margin:auto">

										<div class="col-sm-5">
											<p> Current Privilege</p>
										</div>

										<div class="col-sm-2">

										</div>
										<div class="clearfix visible-xs-block"></div>
										<div class="col-sm-5">
											<p>Privilege List</p>
										</div>
										{!! Form::close() !!}
									</div>
									<div class="row" style="width:80%;margin:auto; height: 90%">
										{{ Form::open(array('url' => '/admin/roles/'.$role[0]->id.'/update/delete', 'method' => 'store','style="margin:0"')) }}
										<div class="col-sm-5">
											<select name="privilege_id" multiple class="form-control" style="height:350px;">
												@foreach($has as $x)
												<option value="{{ $x->privilege_id }}">{{ $x->name}}</option>
												@endforeach				
											</select>				
										</div>

										<div class="col-xs-3 col-sm-2 text-center">
											<input type="submit" value=">>"/><br/>
											{!! Form::close() !!}
											<p></p>
											{{ Form::open(array('url' => '/admin/roles/'.$role[0]->id.'/update/add', 'method' => 'store','style="margin:0"')) }}
											<input type="submit" value="<<"/>
										</div>
										<div class="clearfix visible-xs-block"></div>
										<div class="col-sm-5">
											<select name="privilege_id" multiple class="form-control" style="height:350px;">
												@foreach($hasnot as $x)
												<option value="{{ $x->privilege_id }}">{{ $x->name}}</option>
												@endforeach				
											</select>
										</div>
										{!! Form::close() !!}
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	@endsection