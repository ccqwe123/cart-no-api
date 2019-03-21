@extends('layouts.app')
@section('title', 'Add Product') 
<link href="{{ URL::asset('css/summernote.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
<style type="text/css">
	.prof-pic 
	{
		width: 100%;
	}
	.memb-info span
	{
		display: inline-block;
    line-height: 22px;
    height: 22px;
    text-align: center;
    margin:auto; 
    display:table;
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
.dropdown-menu {
    background-color: #fff !important;
}
</style>
@section('content')
<div class="container">
	<div class="row">
				<div class="col-md-12">
					<h2 class="manage-text">My Account</h2>
				</div>
			</div>
	<div class="row">
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12 memb-info" style="background-color:none;">
					<img src="../images/design.jpg" class="img-responsive prof-pic">
					<span>Ako si Juan</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					 <ul class="list-unstyled">
					 	<li class="li-title">Manage Account</li>
					 	<li>
					 		<ul>
					 			<li><a href="#">Personal Information</a></li>
					 			<li><a href="#">Address</a></li>
					 			<li><a href="#">Contact Information</a></li>
					 			<li><a href="#">Social Media</a></li>
					 		</ul>
					 	</li>
					 	<li class="li-title">My Store</li>
					 	<li>
					 		<ul>
					 			<li><a href="#">View my Store</a></li>
					 			<li><a href="#">Edit Profile Picture</a></li>
					 			<li><a href="#">Edit Cover Photo's</a></li>
					 			<li><a href="#">Deactivate my Store</a></li>
					 		</ul>
					 	</li>
					 	<li class="li-wishlist"><span><a href="#">My Wishlist</a></span></li>
					 </ul>
				</div>
			</div>
		</div>
		<div class="col-md-10" style="height: 100%;">
			<div class="row">
				<div class="col-md-12" style="background-color:white;">
					<h2 class="prod-title1391512031">Add Product</h2>
					<div class="row">
						{{ Form::open(array('url' => '/employees', 'method' => 'store', 'enctype' => "multipart/form-data")) }}
						<div class="col-md-6">
							<div class="form-group">
								<label for="product_name">Product Name:</label>
								<input type="text" class="form-control" id="email" placeholder="Name of Product">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="price">Price:</label>
								<input type="number" class="form-control" id="price" placeholder="0.00">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="price">Location:</label>
								<select name="location" class="form-control selectpicker" data-live-search="true">
									<option disabled selected value="">Select Location</option>
									<option value="Alicia">Alicia</option>
									<option value="Angadanan">Angadanan</option>
									<option value="Aurora">Aurora</option>
									<option value="Benito Soliven">Benito Soliven</option>
									<option value="Burgos">Burgos</option>
									<option value="Cabagan">Cabagan</option>
									<option value="Cabatuan">Cabatuan</option>
									<option value="Cauayan">Cauayan</option>
									<option value="Cordon">Cordon</option>
									<option value="Delfin Albano">Delfin Albano</option>
									<option value="Dinapigue">Dinapigue</option>
									<option value="Divilacan">Divilacan</option>
									<option value="Echague">Echague</option>
									<option value="Gamu">Gamu</option>
									<option value="Ilagan">Ilagan</option>
									<option value="Jones">Jones</option>
									<option value="Luna">Luna</option>
									<option value="Maconacon">Maconacon</option>
									<option value="Mallig">Mallig</option>
									<option value="Naguilian">Naguilian</option>
									<option value="Palanan">Palanan</option>
									<option value="Quezon">Quezon</option>
									<option value="Quirino">Quirino</option>
									<option value="Ramon">Ramon</option>
									<option value="Reina Mercedes">Reina Mercedes</option>
									<option value="Roxas">Roxas</option>
									<option value="San Agustin">San Agustin</option>
									<option value="San Guillermo">San Guillermo</option>
									<option value="San Isidro">San Isidro</option>
									<option value="San Manuel">San Manuel</option>
									<option value="San Mariano">San Mariano</option>
									<option value="San Mateo">San Mateo</option>
									<option value="San Pablo">San Pablo</option>
									<option value="Santa Maria<">Santa Maria</option>
									<option value="Santiago">Santiago</option>
									<option value="Santo Tomas">Santo Tomas</option>
									<option value="Tumauini">Tumauini</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="price">Payment Method:</label>
								<select class="form-control payment-method" name="payment">
									<option disabled selected value="">Select Payment Method</option>
									<option value="cod">Cash on Delivery</option>
									<option value="meetup">Meetup</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 meetme hidden">
							<div class="form-group">
								<label for="price">Meetup Place:</label>
								<input type="text" name="meetupplace" class="form-control" placeholder="ex. Mabini, Santiago City">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="category">Category:</label>
								<select id="category" class="form-control">
									<option disabled selected value="">Select Category</option>
									<option>2</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="category">Return Product (days)</label>
								<input type="number" name="returnproduct" class="form-control" placeholder="0 = Not returnable">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="description">Upload Image:</label>
							<input type="file" id="files" name="files[]" class="form-control" multiple />
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="description">Item Description</label>
							<textarea class="input-block-level" id="summernote" name="description" id="description"></textarea>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-success btn-block">Submit</button>
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