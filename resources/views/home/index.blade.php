@extends('layouts.app')
@section('title', 'Welcome to E-lite Store')
@section('content')
<style type="text/css">
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
.title-product
{
font-family: Roboto-Regular;
font-size: 22px;
color: #424242;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
}
.title-category
{
font-family: Roboto-Regular;
font-size: 22px;
color: #424242;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
margin:10px 10px 50px 10px;
}
.buying-description
{
    font-size: 14px;
    height: 40px;
    line-height: 18px;
    color: #212121;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.profile-user-img
{
   border: none !important;
}
.box-body:hover
{  
   -moz-box-shadow:    1px 1px 1px 1px #ccc;
  -webkit-box-shadow: 1px 1px 1px 1px #ccc;
  box-shadow:         1px 1px 1px 1px #ccc;
}
.col-sm-2
{
   padding-right: 5px;
    padding-left: 5px;
}
</style>
<div class="container">
   <div class="row" style="margin-top:10px; margin-bottom:10px;">
      <div class="col-md-12"><span class="title-category"><i class="fa fa-th" aria-hidden="true"></i> Categories</span></div>
   </div>
   <div class="row">
      <div class="col-md-12">
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/phone-cat.jpg" alt="User profile picture">
                           <center>Mobile Phone</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/dress-cat.jpg" alt="User profile picture">
                           <center>Dresses</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <a href="#">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/house-cat.jpg" alt="User profile picture">
                           <center>House & Lot</center>
                        </div>
                     </a>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/computer-cat.jpg" alt="User profile picture">
                           <center>Computer</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/appliances-cat.jpg" alt="User profile picture">
                           <center>Appliances</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/pet-cat.jpg" alt="User profile picture">
                           <center>Pets</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/toys-cat.jpg" alt="User profile picture">
                           <center>Toys</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/motor-cat.jpg" alt="User profile picture">
                           <center>Motorcycles</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/food-cat.jpg" alt="User profile picture">
                           <center>Food & Snacks</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/furniture-cat.jpg" alt="User profile picture">
                           <center>Furnitures</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/shoes-cat.jpg" alt="User profile picture">
                           <center>Shoes</center>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="box box-default">
                        <div class="box-body box-profile">
                           <img class="profile-user-img img-responsive" src="../images/tshirt-cat.jpg" alt="User profile picture">
                           <center>Tshirt</center>
                        </div>
                     </div>
                  </div>
               </div>
      </div>
   </div>
<div class="container">
   <div class="col-md-12">
      <div class="box box-info">
         <div class="box-header">
            <i class="fa fa-tags" aria-hidden="true"></i>
            <span class="title-product">Selling</span>
            <!-- tools box -->
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
         </div>
         <div class="box-body">
            <!-- dito ung body -->
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-3 p-0">
                     <div class="panel panel-primary boxed panelzone">
                        <div class="panel-header">
                           <a href="#"><img src="../images/design.jpg" class="img-responsive"/></a>
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
               </div>
            </div>
         </div>
         <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="box box-default">
         <div class="box-header">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <span class="title-product">Buying</span>
            <!-- tools box -->
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
         </div>
         <div class="box-body">
            <div class="post">
               <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                  <span class="username">
                     <a href="#">Jonathan Burke Jr.</a>
                  </span>
                  <span class="description">Shared publicly - 7:30 PM today</span>
               </div>
               <!-- /.user-block -->
               <p class="buying-description">
                 Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
               </p>
               <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-eye margin-r-5"></i> View</a>
               </li>
               <li class="pull-right">
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                  (5)</a>
               </li>
               </ul>
            </div>
            <div class="post">
               <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                  <span class="username">
                     <a href="#">Jonathan Burke Jr.</a>
                  </span>
                  <span class="description">Shared publicly - 7:30 PM today</span>
               </div>
               <!-- /.user-block -->
               <p class="buying-description">
                 Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
               </p>
               <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-eye margin-r-5"></i> View</a>
               </li>
               <li class="pull-right">
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                  (5)</a>
               </li>
               </ul>
            </div>
         </div>
         <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All</a>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="box box-default">
         <div class="box-header">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span class="title-product">Search Jobs</span>
            <!-- tools box -->
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
         </div>
         <div class="box-body">
            <table class="table table-striped">
               <tbody>
                  <tr class="active">
                     <td><strong>NSTP Annual Federal Tax Refresher Course</strong>
                     <br/><i class="fa fa-map-marker"></i> 201 Waterfront Street National Harbor, MD 20745</td>
                     <td><strong>AFTR Date & Registration</strong><br/>July 10, 2015<br/><br/></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All</a>
         </div>
      </div>
   </div>
</div>
@endsection