@extends('layouts.app')
@section('title', 'Add Product') 
<link href="{{ URL::asset('css/summernote.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-select.min.css') }}" rel="stylesheet">

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
    @if(Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
	</div>
	<div class="row">
		<div class="col-md-12">
			<select class="form-control">
				<option>1</option>
				<option>1</option>
				<option>1</option>
				<option>1</option>
				<option>1</option>
			</select>
			</div>
	</div>
</div>

@endsection
