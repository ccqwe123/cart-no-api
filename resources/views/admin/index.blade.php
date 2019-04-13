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
.rr .title-personal
{
	color: #212121;
	font-size: 16px;
	margin-bottom: 16px;
	height: 20px;
	line-height: 20px;
	margin-top:8px;
	margin-bottom:10px;
}
.title-personal a
{
	font-size: 12px;
}
.add-product
{
	position: absolute;
	top:0; 
	right:0;
}
.manage-account
{
	color: #FF5722;

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
.panel-heading {
	padding: 5px 10px !important;
	background-color:#fff !important;
	border-bottom: 1px solid #e8e8e8 !important;
}
.panel
{
	margin-bottom: 0px !important;
	border-bottom: 0px !important;
}
/* upload image css here*/
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
h2.prod-title1391512031
{
	color: #FF5722;
	font-family: Arial, Helvetica, sans-serif;
}
@media (max-width: 992px)
{
	.col-md-12
	{
		margin-top:0px !important;
	}
}
.form-group {
	margin-bottom: 0px !important;
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
					 			<li><a href="#">User List</a></li>
					 			<li><a href="#">User Roles</a></li>
					 			<li><a href="#">User Privileges</a></li>
					 			<li><a href="#">Banned Users</a></li>
					 		</ul>
					 	</li>
					 	<li class="li-title">Categories</li>
					 	<li>
					 		<ul>
					 			<li><a href="#">Category List</a></li>
					 			<li><a href="#">Not listed Category</a></li>
					 		</ul>
					 	</li>
					 	<li class="li-title">Products</li>
					 	<li>
					 		<ul>
					 			<li><a href="#">Product List</a></li>
					 			<li><a href="#">Sold Product's</a></li>
					 			<li><a href="#">Deleted Product's</a></li>
					 		</ul>
					 	</li>
					 </ul>
				</div>
			</div>
		</div>
		<div class="col-md-10" style="height: 100%;">
			<div class="row">
				<div class="col-md-12" style="background-color:white; margin-top:-60px;">
					<h2 class="prod-title1391512031">User List</h2>
					<div class="row">
						<div class="col-lg-4" style="margin-bottom:5px;">
							<a href="/patient/create"><button class="btn btn-primary">Add Patient</button></a>
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
					<th>Username</th>
					<th>Email</th>
					<th>Full Name</th>
					<th></th>
				</tr>
			</thead>	
			<tr style="border: 1px solid black;">
				<td>admin</td>
				<td>test@gmail.com</td>
				<td>Jayson Spleken</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Actions
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="/patient_record/triage/"><i class="fa fa-eye"></i> View</a></li>
							<li><a href="/triage/"><i class="fas fa-file-alt"></i> Triage</a></li>
						</ul>
					</div>
				</td>
			</tr>
	</table>
	<div style="text-align: center">
		{{-- $patient->links() --}}
	</div>
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
<script src="{{ URL::asset('js/summernote.js') }}"></script> 
<script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript">
	$('.payment-method').change(function() {
		if(this.value == "meetup")
		{
			$('.meetme').removeClass('hidden');	
		}else
		{
			$('.meetme').addClass('hidden');	
		}
	});
	$(document).ready(function() {
		$('#summernote').summernote({
	  height: 200,
	  minHeight: null,
	  maxHeight: null
		});

		if (window.File && window.FileList && window.FileReader) {
			$("#files").on("change", function(e) {
				var files = e.target.files,
				filesLength = files.length;
				for (var i = 0; i < filesLength; i++) {
					var f = files[i]
					var fileReader = new FileReader();
					fileReader.onload = (function(e) {
						var file = e.target;
						$("<span class=\"pip\">" +
							"<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
							"<br/><span class=\"remove\"><i class='fa fa-times' aria-hidden='true'></i> Cancel</span>" +
							"</span>").insertAfter("#files");
						$(".remove").click(function(){
							$(this).parent(".pip").remove();
						});

					});
					fileReader.readAsDataURL(f);
				}
			});
		} else {
			alert("Your browser doesn't support to File API")
		}
		$('.selectpicker').selectpicker();
	});
</script>
@endsection