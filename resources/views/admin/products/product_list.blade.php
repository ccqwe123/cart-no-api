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
					<h2 class="prod-title1391512031">User Roles</h2>
					@if (Session::has('flash_message'))
					<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
					@endif
					<div class="row">
						<div class="col-md-4 pull-right">
							{{ Form::open(array('url' => '/patient', 'method' => 'get')) }} 
							<div class="input-group" >
								{{ Form::text('search','',array('class'=>'form-control span6','placeholder' => 'Search', 'style'=>'height:35px')) }}
								<span class="errors" style="color:#FF0000"><br>{{$errors->first('search')}}</span>
								<span class="input-group-btn">
									{{ Form::button('<i class="fa fa-search"></i>', array('class'=>'btn btn-primary btn-search-member' ,'type' => 'submit', 'style' => 'height: 35px')) }}
								</span>
							</div>
							{{ Form::close() }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 table-responsive" style="height: 100%;">
							<table class="table table-striped table-bordered table-responsive" style="width:100%" id="patient">
								<thead bgcolor="#337ab7" style="color:white;">
								<tr>
									<th>Product Name</th>
									<th>Category</th>
									<th>Price</th>
									<th></th>
								</tr>
							</thead>
								@foreach ($products as $x)
								<tr>
									<td>{{ $x->product_name }}</td>
									<td>{{ $x->category_name }}</td>
									<td>{{ $x->price }}</td>
									<td>
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Actions
												<span class="caret"></span></button>
												<ul class="dropdown-menu" >
													<li><a href="/admin/roles/{{$x->id}}/old_privilege" title="Privilege"><i class="fa fa-eye-slash" aria-hidden="true"></i> &nbsp;Privilege</a></li>
													<li><a href="" title="Edit" data-toggle="modal" data-target="#editRole{{$x->id}}"><i class="fa fa-pencil margin-right"></i> &nbsp;Edit</a></li>
													<li><a href="/admin/delete_roles/{{$x->id}}" title="Delete" class="confirmation"><i class="fa fa-trash margin-right"></i> &nbsp;Delete</a></li>
												</ul>
											</div>
											<!-- MODAL TO EDIT ROLE -->
											<div id="editRole{{$x->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header" style="background-color: #FF5722; color:white;">
															<button type="button" class="close" style="color:white;" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">EDIT ROLE</h4>
														</div>
														{{ Form::open(array('url' => '/admin/roles/'.$x->id, 'method' => 'PUT')) }}
														<div class="modal-body">

															<div class="row">
																<div class="col-lg-12">
																	{{ Form::label('role_name', 'Role Name') }}
																	{{ Form::text('role_name',$x->product_name,array('class'=>'form-control span6','placeholder' => 'Role Name')) }}
																	<span class="errors" style="color:#FF0000">{{$errors->first('role_name')}}</span>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-warning">Save</button>
														</div>
													</div>
													{{ Form::close() }}
												</div>
											</div>
										</td>
									</tr>
									@endforeach 
								</table>

							</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	@endsection