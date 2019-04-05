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
  .pcategory
  {
    border-top: 1px solid #ececec;
    padding-top: 16px;
  }
  .category-title
  {
    font-family: Roboto-Regular;
    font-size: 22px;
    color: #424242;
    padding-left:10px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
 .checkbox {
  padding-left: 35px; 
}
  .checkbox label {
    display: inline-block;
    position: relative;
    padding-left: 15px; }
    .checkbox label::before {
      content: "";
      display: inline-block;
      position: absolute;
      width: 17px;
      height: 17px;
      left: 0;
      margin-left: -20px;
      border: 1px solid #cccccc;
      border-radius: 3px;
      background-color: #fff;
      -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
      -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
      transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
    .checkbox label::after {
      display: inline-block;
      position: absolute;
      width: 16px;
      height: 16px;
      left: 0;
      top: 0;
      margin-left: -20px;
      padding-left: 3px;
      padding-top: 1px;
      font-size: 11px;
      color: #555555; }

    .checkbox input[type="checkbox"]:checked + label::after {
      font-family: 'FontAwesome';
      content: "\f00c"; }

.checkbox-primary input[type="checkbox"]:checked + label::before {
  background-color: #428bca;
  border-color: #428bca; }
.checkbox-primary input[type="checkbox"]:checked + label::after {
  color: #fff; }
.category-height
{
   width:250px;
      height:100%;
      display:block; 
      overflow:hidden;
      word-break: break-word;
      word-wrap: break-word;
      margin-bottom:5px;
}
.category-height label
{
  font-size: 13px;
  color: #757575;
    line-height: 16px;
}
.location-height
{
   width:250px;
      height:100%;
      display:block; 
      overflow:hidden;
      word-break: break-word;
      word-wrap: break-word;
      margin-bottom:5px;
}
.location-height label
{
  font-size: 13px;
  color: #757575;
    line-height: 16px;
}
.button, .buttonlocation {
    margin-left:15px;
    font-family: Roboto-Medium;
    color: #1a9cb7;
    cursor: pointer;
    font-weight: bold;
  }
  .clearfix
  {
    border-top: 1px solid #cecccc;
    margin:10px 0px;
  }
  @media (max-width: 767px){
.fixed .content-wrapper, .fixed .right-side {
    padding-top: 40px;
}
}
</style>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="pcategory">
            <div class="category-title">
              <i class="fa fa-th" aria-hidden="true"></i> &nbsp;Category
            </div>
          </div>
          <div class="category-height">
           @foreach($category as $x)
          <div class="checkbox checkbox-primary ">
            <input id="{{$x->category_name}}" type="checkbox">
            <label for="{{$x->category_name}}">
              {{$x->category_name}}
            </label>
          </div>
          @endforeach
        </div>
        <a class="button" href="#">VIEW MORE</a>
        <div class="clearfix"></div>
        <div class="pcategory">
            <div class="category-title">
              <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Location
            </div>
          </div>
          <div class="location-height">
           @foreach($locations as $x)
          <div class="checkbox checkbox-primary ">
            <input id="{{$x->state}}" type="checkbox">
            <label for="{{$x->state}}">
              {{$x->state}}
            </label>
          </div>
          @endforeach
        </div>
        <a class="buttonlocation" href="#">VIEW MORE</a>
        </div>
        <div class="col-md-10">
            <div class="box box-default">
                <div class="box-body"> <!--- panel body -->
                    <!-- side bar -->
                    <div class="col-md-12">
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

@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function() {
    var defaultHeight = 180;
    var text = $(".category-height");
    var texts = $(".location-height");
    var textHeight = text[0].scrollHeight;
    var button = $(".button");
    var buttons = $(".buttonlocation");
      text.css({"max-height": defaultHeight, "overflow": "hidden"});
      texts.css({"max-height": defaultHeight, "overflow": "hidden"});
      button.on("click", function(){
          var newHeight = 0;
          if (text.hasClass("active")) {
            newHeight = defaultHeight;
            text.removeClass("active");
            button.text('VIEW MORE');
          } else {
            newHeight = textHeight;
            text.addClass("active");
            button.text('VIEW LESS');
          }
      text.animate({
        "max-height": newHeight
        }, 500);
      });
      buttons.on("click", function(){
          var newHeight = 0;
          if (texts.hasClass("active")) {
            newHeight = defaultHeight;
            texts.removeClass("active");
            buttons.text('VIEW MORE');
          } else {
            newHeight = textHeight;
            texts.addClass("active");
            buttons.text('VIEW LESS');
          }
      texts.animate({
        "max-height": newHeight
        }, 500);
      });
});
</script>
@endsection
