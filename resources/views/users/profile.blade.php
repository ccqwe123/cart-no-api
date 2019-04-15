@extends('layouts.app')
@section('title', 'My Profile') 
<style type="text/css">
  


</style>
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
              <h3 class="box-title">Edit Personal Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="row">
                <div class="co-md-12">
                  <div style="text-align: center">
                    <div  class="img_caption" style="margin: 20px auto; height: 150px; width: 150px; overflow: hidden; position: relative; outline: 5px solid #f1f2f6; ">
                          <img src="{{URL::asset('/uploads/users/anon.png' ) }}" id="prof_id" class="img-responsive" alt=""  style="  height: 150px; width: auto;">
                          <label for="image_id" class="caption"><i class="fa fa-camera hidden"></i> Add Photo</label>
                          <label class="caption-cam"><i class="fa fa-camera"></i></label>
                        </div>

                    {{ Form::hidden('user_photo_image') }}
                    {!! Form::file('user_photo', array('id'=>'image_id', 'class'=>'hidden')) !!} 
                  </div>
                </div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">Full Name</label>
		                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="gender">Gender</label>
		                  <select name="gender" class="form-control" id="gender">
		                  	<option>Male</option>
		                  	<option>Female</option>
		                  </select>
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">Mobile Number</label>
		                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
		                  <label for="exampleInputEmail1">Email</label>
		                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Date:</label>
			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" class="form-control pull-right" id="datepicker">
			                </div>
			                <!-- /.input group -->
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
		          <div class="title-personal"><span>Address</span>
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
  function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#prof_id').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#image_id").change(function() {
      readURL(this);
      $("#remove_image").removeClass('hidden');
    });
    $("#remove_image").click(function() {
      $('#image_id').val(''); 
      $('#prof_id').attr('src', '/uploads/users/anon.png');
      $("#remove_image").addClass('hidden');
    });



</script>
@endsection