@extends('layouts.app')
@section('title', 'Add Product') 
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
				<div class="col-md-4 rr" style="background-color:white; height: 200px;">
					<div class="title-personal"><span>Personal Information</span>
						<span>|</span>
						<a href="#">EDIT</a>
					</div>
				</div>
				<div class="col-md-4 rr" style="background-color:white; height: 200px;">
					<div class="title-personal"><span>Address</span>
						<span>|</span>
						<a href="#">EDIT</a>
					</div>
				</div>
				<div class="col-md-4 rr" style="background-color:white; height: 200px;">
					<div class="title-personal"><span>Contact Information</span>
						<span>|</span>
						<a href="#">EDIT</a>
					</div>
				</div>
				<div class="col-md-12 rr">
				</div>
				<div class="col-md-12" style="background-color:white; width: 100%; margin:0; padding: 0px;">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>My Products</h4></div>
						<div class="panel-body table-responsive">
							<table id="table_id" class="" style="width:100%; border:none;">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>Price</th>
										<th>Payment Method</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 1</td>
										<td>Row 1 Data 2</td>
									</tr>
									<tr>
										<td>Row 2 Data 1</td>
										<td>Row 2 Data 1</td>
										<td>Row 2 Data 1</td>
										<td>Row 2 Data 2</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

@endsection