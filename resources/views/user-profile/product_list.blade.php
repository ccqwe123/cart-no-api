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

</style>
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css"/>
<div class="container-fluid need-top">
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
              <a href="#" class="btn btn-sm bg-maroon btn-flat"><i class="fa fa-plus"></i> Sell Something</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="myTable" class="table table-bordered table-striped">
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
                  <td><span class="label label-default">0</span></td>
                  <td class="text-center">
                    <a href="#" class="btn bg-orange btn-flat"><i class="fa fa-flag"></i></a>
                    <a href="#" class="btn bg-olive btn-flat"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>

                  </td>
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

