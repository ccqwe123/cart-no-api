@extends('layouts.app')
@section('title', 'My Profile') 
@section('content')
<div class="container-fluid need-top">
	<div class="row">
		<section class="content-header">
      <h1>
        Personal Profile
        <small>User panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Personal Profile</li>
      </ol>
    </section>
	</div>
	<div class="row">
        <div class="col-md-7">
        	<div class="box box-info" style="margin-top:30px;">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Address</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body personal-profile-padding" style="padding:80px; ">
            	<div class="row">
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">State</label>
		                  <select name="state" class="form-control selectpicker" data-live-search="true">
							<option disabled selected value="">Select Location</option>
							@foreach($state as $x)
							<option value="{{$x->state}}">{{$x->state}}</option>
							@endforeach
						</select>
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">Province</label>
		                  <select name="gender" class="form-control" readonly>
		                  	<option>Isabela</option>
		                  </select>
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">House Number</label>
		                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="# of House">
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">Street</label>
		                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Street">
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">Barangay</label>
		                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Barangay Name">
		                </div>
            		</div>
            	</div>
            	<div class="row">
            		<div class="col-md-3">
            		</div>
            		<div class="col-md-6" style="margin-top:20px;">
            			<button class="btn bg-orange btn-flat btn-block btn-lg">Save</button>
            		</div>
            		<div class="col-md-3">
            		</div>
            	</div>
            </div>
        </div>
        </div>
        <div class="col-md-5">
        	<div class="box box-info" style="margin-top:30px;">
             <div class="box-body">
             	<div class="box-body">
		          <div class="title-personal"><span>Perosnal Profile</span>
		            <span>|</span>
		            <a href="#">EDIT</a>
		          </div>
		          <div class="user-info">
		            <div class="user-info-item">May name is Here</div>
		            <div class="user-info-item">email@ymail.com</div>
		            <div class="user-info-item">May name is Here</div>
		          </div>
		        </div>
             </div>
         </div>
        </div>
        <div class="col-md-5">
        	<div class="box box-info">
             <div class="box-body">
             	<div class="box-body">
		          <div class="title-personal"><span>Social Media</span>
		            <span>|</span>
		            <a href="#">EDIT</a>
		          </div>
		          <div class="user-info">
		            <div class="user-info-item">May name is Here</div>
		            <div class="user-info-item">email@ymail.com</div>
		            <div class="user-info-item">May name is Here</div>
		          </div>
		        </div>
             </div>
         </div>
        </div>
      </div>
</div>
@endsection
@section('js')
{{Html::style('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}
<script type="text/javascript">
	$('#datepicker').datepicker({
    })
</script>
@endsection