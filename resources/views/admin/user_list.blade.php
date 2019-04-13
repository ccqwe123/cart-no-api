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
					<h2 class="prod-title1391512031">{{$user_title}}</h2>
					@if (Session::has('success'))
					<div class="alert alert-success">{{ Session::get('success') }}</div>
					@endif
					<div class="row">
						<div class="col-lg-4" style="margin-bottom:5px;">
							<button class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add User</button>
						</div>
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
									<tr style="border: 1px solid black;">
										<th width="15%">Username</th>
										<th width="25%">Email</th>
										<th width="30%">Full Name</th>
										<th>User Role</th>
										<th></th>
									</tr>
								</thead>	
								@foreach($users as $x)
								<tr style="border: 1px solid black;">
									<td>{{$x->username}}</td>
									<td>{{$x->email}}</td>
									<td>{{$x->full_name}}</td>
									<td>{{$x->role_name}}</td>
									<td>
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Actions
												<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href=""  data-toggle="modal" data-target="#editUser{{$x->id}}"><i class="fa fa-eye"></i> Edit</a></li>
													@if($x->status == 0)
													<li><a href="/admin/user-ban"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Ban User</a></li>
													@else
													<li><a href="/admin/user-unban/"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Unban User</a></li>
													@endif
												</ul>
											</div>
										</td>
										<!-- edit user -->
									<div id="editUser{{$x->id}}" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header" style="background-color: #FF5722; color:white;">
													<button type="button" class="close" style="color:white;" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">EDIT USER</h4>
												</div>
												<div class="modal-body">
													<div class="row">
														{{ Form::open(array('url' => '/users/'.$x->id, 'method' => 'PUT','files'=>true)) }}
														<div class="col-md-12">
															<div  class="img_caption" style="margin: 2px auto;width: 150px; overflow: hidden; position: relative; outline: 5px solid #f1f2f6;">
																<img src="{{URL::asset('/uploads/users/'. ($x->photo==''? 'anon.png':$x->photo) ) }}" id="new_prof_id" class="img-responsive" alt=""  style="  height: 150px; width: auto;">
																<label for="edit_image_id2" class="caption"><i class="fa fa-camera hidden"></i> Add Photo</label>
																<label class="caption-cam"><i class="fa fa-camera"></i></label>
															</div>
															{!! Form::file('edit_photo', array('id'=>'edit_image_id2', 'class'=>'hidden file')) !!} 
															<center><label for="edit_image_id2">Upload Image</label></center>	
															<span class="errors" style="color:#FF0000">{{$errors->first('photo')}}</span>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="full_name" class="col-md-4 control-label">Full Name</label>
																<div class="col-md-12">
																	<input required id="full_name" type="text" class="form-control" name="full_name" value="{{$x->full_name}}">
																</div>
															</div>
															<div class="form-group">
																<label for="contactnum" class="col-md-4 control-label">Address</label>
																<div class="col-md-12">
																	<input required id="address" type="text" class="form-control" name="address" value="{{ $x->address }}">
																</div>
															</div>
															<div class="form-group">
																<label for="contactnum" class="col-md-4 control-label">Contact Number</label>
																<div class="col-md-12">
																	<input id="contactnum" type="text" class="form-control" name="contactnum" value="{{$x->contact_no}}">
																</div>
															</div>
															<div class="form-group">
																<label for="contactnum" class="col-md-4 control-label">Username</label>
																<div class="col-md-12">
																	<input required id="username" type="text" class="form-control" name="username" value="{{$x->username}}" autocomplete="off">
																</div>
															</div>
															<div class="form-group">
																<label for="contactnum" class="col-md-4 control-label">Email</label>
																<div class="col-md-12">
																	<input required id="email" type="email" class="form-control" name="email" value="{{$x->email}}" autocomplete="off">
																</div>
															</div>
															<div class="form-group">
																<label for="contactnum" class="col-md-4 control-label">Password</label>
																<div class="col-md-12">
																	<input id="password" type="password" class="form-control" name="password" autocomplete="off">
																</div>
															</div>
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
									</tr>
									@endforeach
								</table>
								<div style="text-align: center">
									{{ $users->links() }}
								</div>
							</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

<!-- MODAL TO ADD USER -->
<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FF5722; color:white;">
        <button type="button" class="close" style="color:white;" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD USER</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		{{ Form::open(array('url' => '/users', 'method' => 'POST','files'=>true)) }}
      		<div class="col-md-12">
      			<div  class="img_caption" style="margin: 2px auto;width: 150px; overflow: hidden; position: relative; outline: 5px solid #f1f2f6;">
      				<img src="{{URL::asset('/uploads/users/anon.png' ) }}" id="prof_id" class="img-responsive" alt=""  style="  height: 150px; width: auto;">
      				<label for="add_image_id" class="caption"><i class="fa fa-camera hidden"></i> Add Photo</label>
      				<label class="caption-cam"><i class="fa fa-camera"></i></label>
      			</div>
      			{!! Form::file('photo', array('id'=>'add_image_id', 'class'=>'hidden file')) !!} 
      			<center><label for="add_image_id">Upload Image</label></center>	
      			<span class="errors" style="color:#FF0000">{{$errors->first('photo')}}</span>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12">
      			<div class="form-group">
      				<label for="full_name" class="col-md-4 control-label">Full Name</label>
      				<div class="col-md-12">
      					<input required id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}">
      				</div>
      			</div>
      			<div class="form-group">
      				<label for="contactnum" class="col-md-4 control-label">Address</label>
      				<div class="col-md-12">
      					 <input required id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">
      				</div>
      			</div>
      			<div class="form-group">
      				<label for="contactnum" class="col-md-4 control-label">Contact Number</label>
      				<div class="col-md-12">
      					<input required id="contactnum" type="text" class="form-control" name="contactnum" value="{{ old('contactnum') }}">
      				</div>
      			</div>
      			<div class="form-group">
      				<label for="contactnum" class="col-md-4 control-label">Username</label>
      				<div class="col-md-12">
      					<input required id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" autocomplete="off">
      				</div>
      			</div>
      			<div class="form-group">
      				<label for="contactnum" class="col-md-4 control-label">Email</label>
      				<div class="col-md-12">
      					<input required id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="off">
      				</div>
      			</div>
      			<div class="form-group">
      				<label for="contactnum" class="col-md-4 control-label">Password</label>
      				<div class="col-md-12">
      					<input required id="password" type="password" class="form-control" name="password" autocomplete="off">
      				</div>
      			</div>
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
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
	function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        if($(input).attr('id')=='add_image_id') {
          $('#prof_id').attr('src', e.target.result);
        } else if ($(input).attr('id')=='edit_image_id2'){
          $('#new_prof_id').attr('src', e.target.result);
        }
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $(".file").change(function() {
  	readURL(this);
  });
	</script>
@endsection