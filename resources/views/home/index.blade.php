@extends('layouts.app')
@section('title', 'Welcome to E-lite Store') 
@section('content')
<style type="text/css">

 .center-content {
      position: relative;
      top: -300px;
  }
  .boxed {
    border: none;
  }
  .boxed:hover {
      box-shadow: 0 0 11px rgba(33,33,33,.2); 
  }
  .panelzone {
    min-height: 300px;
    max-height: 300px;
  }
  .panelzone > .panel-header {
      padding: 0px;
  }
  .panelzone > .panel-header > a>img {
      width: 100%;
      height: 150px;
  }
  .product-title
  {
    overflow: hidden;
    height: 47px;
    line-height: 16px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
  }
  .product-title a
  {
    text-decoration: none;
    color: #101010;
  }
  .rating 
  {
    color: #faca51;
  text-decoration: none;
  font-size: 11px;
  }
  .product-user
  {
    float: right;
    color: #9e9e9e;
    font-size: 10px;
    width: 80px;
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    text-align: right;
  }
  .product-user a
  {
    text-decoration: none;
    color: #9e9e9e;
  }
  .product-location
  {
    color: #9e9e9e;
    font-size: 10px;
    width: 80px;
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
  }
  .panel-body
  {
     padding: 15px 15px 5px 15px !important;
  }
  div.support-menu
  {
    width: 100% !important;
  }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body"> <!--- panel body -->
                    <!-- side bar -->
                    @include('layouts.sidebar')
                    <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                      <?php
                                      $tet = "google here";
                                      ?>
                                    <a href="/product/<?php echo str_slug($tet, '-'); ?>"><span style="">AVISION 55" FULL HD SMART DIGITAL LED TV 55K786 w/ free wall bracketFULL HD SMART DIGITAL LED TV 55K786 w/ free wall bracket </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                    <a href="#><span style="">AMD Ryzen 3 2200G </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                    <a href="#><span style="">AMD Ryzen 3 2200G </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                    <a href="#><span style="">AMD Ryzen 3 2200G </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                    <a href="#><span style="">AMD Ryzen 3 2200G </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                    <a href="#><span style="">AMD Ryzen 3 2200G </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3 p-0">
                                <div class="panel panel-primary boxed panelzone">
                                  <div class="panel-header">
                                    <a href="#"><img src="./images/design.jpg" class="img-responsive"/></a>
                                </div>
                                <div class="panel-body">
                                    <div class="product-title">
                                    <a href="#><span style="">AMD Ryzen 3 2200G </span></a>
                                    </div>
                                    <span class="product-location">Santiago City</span>
                                    <p style="color:#ff7f00; font-weight: bold;">₱9,799.00</p>
                                </div>
                                <div class="panel-footer" style="background-color: #fff; border:none;">
                                    <div class="rating" style="float:left;">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <span style="color:gray;">(5)</span>
                                    </div>
                                    <div class="product-user">
                                      <a href="#">user here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div> <!-- end panel body =-->
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/jquery.js') }}"></script>  
<script type="text/javascript">

</script>
@endsection
