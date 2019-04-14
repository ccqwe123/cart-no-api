@extends('layouts.app')
@section('title', 'Product List') 
@section('content')
<style type="text/css">
  .content-header
  {
    padding: 15px 15px 20px 15px;
  }
  @media (max-width: 992px){
    .content-header {
    padding: 15px 15px 0 15px;
    }
  }
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
a.selected.active
{
  background-color:#3c8dbc !important;
}
.button-clear
{
  /*display: none;*/
  padding:28px;
}
</style>
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css"/>
<div class="container-fluid need-top" id="productlist">
	<div class="row">
		<section class="content-header">
      <h1>
        Personal Profile
        <small>User panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User Profile</a></li>
        <li class="active">Product List</li>
      </ol>
    </section>
	</div>
	<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <a href="{{route('users.user_profile.product.sell')}}" class="btn btn-sm bg-maroon btn-flat"><i class="fa fa-plus"></i> Sell Something</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="myTable" class="table table-hover">
                <thead>
                <tr>
                  <th>Item Name</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Comments</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->price }}</td>
                  @if($product->status==0)
                  <td><span class="label label-success">Available</span></td>
                  @else
                  <td><span class="label label-danger">Sold</span></td>
                  @endif
                  <td><span class="label label-default" data-toggle="tooltip" title="Total Comments">0</span></td>
                  <td class="text-center" style="display:inline-flex;">
                    <a href="#" class="btn bg-orange btn-flat" data-toggle="tooltip" title="Mark as Sold!"><i class="fa fa-flag"></i></a>
                    <button data-target="#product{{ $product->id }}" data-id="{{ $product->id }}" class="btn bg-olive btn-flat button-view" data-toggle="modal" title="View" @click="report_edit({{ $product }})"><i class="fa fa-eye"></i></button>
                    <a href="#" class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete Product"><i class="fa fa-trash"></i></a>
                  </td>
                  <div id="product{{ $product->id }}" class="modal fade" role="dialog"> <!-- start modal here boom panot -->
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Item</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                {!! Form::open(['route'=>'users.user_profile.product.update','enctype' => "multipart/form-data"]) !!}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" class="form-control" name="product_name" placeholder="Name of Product" value="{{ $product->product_name }}">
                                    <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                                    @if (count($errors) > 0)
                                    <span class="errors" style="color:#FF0000">* {{$errors->first('product_name')}}</span>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" class="form-control" name="price" placeholder="0.00" value="{{ number_format($product->price) }}">
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
                                      <option value="{{ $x->id }}" @if($product->location == $x->id) selected @endif>{{ $x->state }}</option>
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
                                      <option value="cod" @if($product->payment_method == 'cod') selected @endif>Cash on Delivery</option>
                                      <option value="meetup" @if($product->payment_method == 'meetup') selected @endif>Meetup</option>
                                    </select>
                                    @if (count($errors) > 0)
                                    <span class="errors" style="color:#FF0000">* {{$errors->first('payment')}}</span>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-12 meetme  @if($product->payment_method == 'meetup')  @else hidden @endif">
                                  <div class="form-group">
                                    <label>Get Meetup place by clicking on the map:</label>
                                    <i class="fa fa-spinner fa-spin"></i>
                                    <div id="map_edit{{ $product->id }}" style="height: 450px"></div>
                                  </div>
                                </div>
                                  <div class="col-md-12 meetme @if($product->payment_method == 'meetup')  @else hidden @endif">
                                      <i class="fa fa-spinner fa-spin" v-if="isLoadingGetAddress_edit == true" v-cloak></i>Address:
                                      <input type="text" name="address" v-model="address_edit" class="form-control address" required readonly="true">
                                  </div>
                                      <input type="hidden" v-model="latitude_edit" step="0.0000001" min="0" name="latitude" class="form-control latitude">
                                      <input type="hidden" v-model="longitude_edit" step="0.0000001" min="0" name="longitude" class="form-control longitude">
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
                                    <input type="number" name="returnproduct" class="form-control" placeholder="0 = Not returnable" value="{{ $product->return_item }}">
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
                                  @foreach($product->images as $img)
                                  <span class="pip" id="pip"><img class="imageThumb" src="{{asset('/uploads/products/'.$img->photo)}}" title=""></span>
                                  {{-- <span class="pip"><img class="imageThumb" src="/images/dress-cat.jpg" title=""></span> --}}
                                  @endforeach
                                  <a href="#" class="btn-danger button-clear" id="clearbutton">CLEAR</a>
                                  @if (count($errors) > 0)
                                    <span class="errors" style="color:#FF0000">* {{$errors->first('files')}}</span>
                                  @endif
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12" style="margin-top:20px;">
                                  <label for="description">Item Description</label>
                                  <textarea class="input-block-level testsummer" id="summernote{{ $product->id }}" name="description">{{ $product->product_description }}</textarea>
                                  @if (count($errors) > 0)
                                    <span class="errors" style="color:#FF0000">* {{$errors->first('description')}}</span>
                                  @endif
                                </div>
                              </div>  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success button-submit">Submit</button>
                          </div>
                        </div>
                        {!! Form::close() !!}
                      </div>
                    </div><!-- end modal -->
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('.button-view').click(function(){
      var val = $(this).attr("data-id");
      var modal = $(this).attr("data-target");
     $('#summernote'+val).summernote({
      height: 150,
      minHeight: null,
      toolbar: [
              [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'clear'] ],
          ],
      maxHeight: null
      });
     $(modal).on('hidden.bs.modal', function () {
      location.reload();
      })
    })

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
            //  $(this).parent(".pip").remove();
            // });
            $('.button-clear').show();

          });
          fileReader.readAsDataURL(f);
        }

      });
    } else {
      alert("Your browser doesn't support to File API")
    }
    $("#files").on("click", function() {
      $('.pip').hide();
          $('#files').val("");
          $('#clearbutton').hide();
    });
    $('.selectpicker').selectpicker();
    
   $('.button-clear').click(function() {
      var valu = $(this).attr("id");
            $('.pip').hide();
            $('#files').val("");
            $(this).hide();
        });

  });
  });
</script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyqWS3s8tMgdGkx4Yj9IdJ9vzCrmWQqUo">
</script>
{{Html::script('js/vue.min.js')}}
{{Html::script('js/axios.min.js')}}
<script>
    var myLatLng = {lat: 16.714983, lng: 121.553719};
    var app = new Vue({
        el: '#productlist',
        delimiters: ["[[","]]"],
        data: {
            image_edit: '',
            isLoadingGetLatLng_edit: false,
            latitude_edit: '',
            longitude_edit: '',
            address_edit: '',
            markers: '',
            id_edit: '',
            isLoadingGetAddress_edit: false,
            @foreach($products as $product)
            gMap_edit{{$product->id}}: '',
            @endforeach
        },
        mounted(){

            let vm = this;

            @foreach($products as $product)
            vm.gMap_edit{{$product->id}} = new google.maps.Map(document.getElementById('map_edit{{$product->id}}'), {
              zoom: 14,
              @if($product->latitude=='' && $product->longitude=='')
              center: {lat: 16.714983, lng: 121.553719}
              @else
              center: {lat: {{$product->latitude}}, lng:  {{$product->longitude}}}
              @endif
            });
            this.markers = new google.maps.Marker({
              position: {lat: {{$product->latitude}}, lng:  {{$product->longitude}}},
              map: this.gMap_edit{{$product->id}},
            });
            google.maps.event.addListener(this.gMap_edit{{$product->id}}, "click", function (event) {
                $('.button-submit').attr('disabled',false);
                vm.latitude_edit = parseFloat(event.latLng.lat()).toFixed(7);
                vm.longitude_edit = parseFloat(event.latLng.lng()).toFixed(7);
                myLatLng = {lat: event.latLng.lat(), lng: event.latLng.lng()};
                vm.addressDetailsCoordsEdit();
            });
            @endforeach
        },
        methods: {

            report_edit(product){
                this.id_edit = product.id;
                this.address_edit = product.address;
                this.latitude_edit = product.latitude;
                this.longitude_edit = product.longitude;
            },
            async addressDetailsCoordsEdit() {
                vm = this;
                try{
                    vm.isLoadingGetAddress_edit = true;
                    let street_address ='';
                    if (this.markers && this.markers.setMap) {
                        this.markers.setMap(null);
                    }
                    @foreach($products as $product)
                        if({{$product->id}} == vm.id_edit){
                            this.markers = new google.maps.Marker({
                              position: myLatLng,
                              map: vm.gMap_edit{{$product->id}},
                            });
                        }
                    @endforeach
                    /*getting the municipal and province from the longitude and latitude of the address*/
                    const responseData = await axios.get('https://maps.googleapis.com/maps/api/geocode/json?latlng='+vm.latitude_edit+','+vm.longitude_edit+'&key=AIzaSyAyqWS3s8tMgdGkx4Yj9IdJ9vzCrmWQqUo');
                    vm.address_edit = responseData.data.results[0].formatted_address;
                    vm.isLoadingGetAddress_edit = false;
                } catch (error) {
                    vm.isLoadingGetAddress_edit = true;
                }
            },
          
        }
    });
    $(function () {
/*           $('#esaktable').DataTable({
            "bPaginate": false,
            "bInfo" : false,
            "searching": false
          }); */
         /*  oTable = $('#myTable').DataTable({
        "order": [[ 0, "asc" ]],
      }); */
        //   $("#larasearch").appendTo("#search-d");
        //   $("#esaktable_filter label").appendTo("#search-d");
    });
</script>
@endsection


