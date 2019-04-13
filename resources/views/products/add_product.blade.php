@extends('layouts.app')
@section('title', 'Add Product') 
<link href="{{ URL::asset('css/summernote.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
<style type="text/css">
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
a.selected.active
{
	background-color:#3c8dbc !important;
}
.button-clear
{
	display: none;
	padding:28px;
}
</style>
@section('content')
<div class="container-fluid need-top">
	<div class="row">
		<section class="content-header" style="padding-bottom:10px">
      <h1>
        Sell Somthing
        <small>User panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User Profile</a></li>
        <li class="active">Sell Item</li>
      </ol>
    </section>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="box">
            <div class="box-header">
					<div class="row">
						{!! Form::open(array('url' => '/post-product', 'method' => 'store', 'enctype' => "multipart/form-data")) !!}
						<form method="post" >
						<div class="col-md-6">
							<div class="form-group">
								<label for="product_name">Product Name:</label>
								<input type="text" class="form-control" name="product_name" placeholder="Name of Product">
								<input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
								@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('product_name')}}</span>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="price">Price:</label>
								<input type="number" class="form-control" name="price" placeholder="0.00">
								@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('price')}}</span>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="price">Location:</label>
								<select name="location" class="form-control selectpicker" data-live-search="true">
									<option disabled selected value="">Select Location</option>
									@foreach($locations as $x)
									<option value="{{ $x->id }}">{{ $x->state }}</option>
									@endforeach
								</select>
								@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('location')}}</span>
								@endif
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
								@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('payment')}}</span>
								@endif
							</div>
						</div>
						<div id="crimesandincidents">
						<div class="col-md-12 meetme hidden">
							<div class="form-group">
								<label>Get Meetup place by clicking on the map:</label>
								<i class="fa fa-spinner fa-spin" v-if="isLoadingGetAddress_add == true" v-cloak></i>
								<div id="map_add" style="height: 450px"></div>
							</div>
						</div>
                            <div class="col-md-12 meetme hidden">
                                <i class="fa fa-spinner fa-spin" v-if="isLoadingGetAddress_add == true" v-cloak></i>Address:
                                <input type="text" name="address" v-model="address_add" class="form-control address" required >
                            </div>
                                <input type="hidden" v-model="latitude_add" step="0.0000001" min="0" name="latitude" class="form-control latitude">
                                <input type="hidden" v-model="longitude_add" step="0.0000001" min="0" name="longitude" class="form-control longitude">
                         </div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="category">Category:</label>
								<select id="category" class="form-control" name="category">
									<option disabled selected value="">Select Category</option>
									<option value="1">2</option>
								</select>
								@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('category')}}</span>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="category">Return Product (days)</label>
								<input type="number" name="returnproduct" class="form-control" placeholder="0 = Not returnable">
								@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('returnproduct')}}</span>
							@endif
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="description">Upload Image:</label>
							<input type="file" id="files" name="files[]" class="form-control" multiple accept="image/jpeg, image/png"/>
							<a href="#" class="btn-danger button-clear" id="clearbutton">CLEAR</a>
							@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('files','Please upload atleast 1 image')}}</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-top:20px;">
							<label for="description">Item Description</label>
							<textarea class="input-block-level" id="summernote" name="description" id="description"></textarea>
							@if (count($errors) > 0)
								<span class="errors" style="color:#FF0000">* {{$errors->first('description')}}</span>
							@endif
						</div>
					</div>	
					<div class="row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-success btn-block button-submit">Submit</button>
						</div>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyqWS3s8tMgdGkx4Yj9IdJ9vzCrmWQqUo">
</script>
{{Html::script('js/vue.min.js')}}
{{Html::script('js/axios.min.js')}}
<script type="text/javascript">
	var myLatLng = {lat: 16.714983, lng: 121.553719};
	var app = new Vue({
        el: '#crimesandincidents',
        delimiters: ["[[","]]"],
        data: {
            image_add: '',
            isLoadingGetLatLng_add: false,
            latitude_add: '',
            longitude_add: '',
            address_add: '',
            latitude_edit: '',
            markers: '',
            id_edit: '',
            isLoadingGetAddress_add: false,
            gMap_add: '',
        },
        mounted(){
            let vm = this;
            vm.gMap_add = new google.maps.Map(document.getElementById('map_add'), {
              zoom: 13,
              center: myLatLng,
            });

            google.maps.event.addListener(this.gMap_add, "click", function (event) {
            	$('.button-submit').attr('disabled',false);
                vm.latitude_add = parseFloat(event.latLng.lat()).toFixed(7);
                vm.longitude_add = parseFloat(event.latLng.lng()).toFixed(7);
                myLatLng = {lat: event.latLng.lat(), lng: event.latLng.lng()};
                vm.addressDetailsCoordsAdd();
            });
        },
        methods: {
            async addressDetailsCoordsAdd() {
                vm = this;
                try{
                    vm.isLoadingGetAddress_add = true;

                    if (this.markers && this.markers.setMap) {
                        this.markers.setMap(null);
                    }
                    this.markers = new google.maps.Marker({
                      position: myLatLng,
                      map: vm.gMap_add,
                    });
                    const responseData = await axios.get('https://maps.googleapis.com/maps/api/geocode/json?latlng='+vm.latitude_add+','+vm.longitude_add+'&key=AIzaSyAyqWS3s8tMgdGkx4Yj9IdJ9vzCrmWQqUo');
                    vm.address_add = responseData.data.results[0].formatted_address;
                    vm.isLoadingGetAddress_add = false;
                } catch (error) {
                    vm.isLoadingGetAddress_add = true;
                }
            },
      
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.payment-method').change(function() {
		if(this.value == "meetup")
		{	
			$('.button-submit').attr('disabled',true);
			$('.meetme').removeClass('hidden');	
		}else
		{
			$('.meetme').addClass('hidden');
			$('.address').val("");
			$('.latitude').val("");
			$('.longitude').val("");

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
							"<br/>" +
							"</span>").insertAfter("#files");
						// $(".remove").click(function(){
						// 	$(this).parent(".pip").remove();
						// });
						$('.button-clear').show();

					});
					fileReader.readAsDataURL(f);
				}

			});
		} else {
			alert("Your browser doesn't support to File API")
		}
		$('.selectpicker').selectpicker();
		
		$('#clearbutton').on("click", function() {
	        $('.pip').hide();
	        $('#files').val("");
	        $(this).hide();
    	});
	});
</script>
@endsection
