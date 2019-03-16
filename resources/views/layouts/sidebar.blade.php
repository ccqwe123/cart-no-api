<style type="text/css">
	  ul {
list-style-type: none;
    padding-inline-start: 0;
}
ul li a {
  color:#faca51;
}
ul li a:hover {
  color: #faca51;
  text-decoration: none;
}
ul li>a:link
{
	text-decoration: none;
	color: #faca51;
}
ul li>a:visited 
{
	color:#faca51;
}
.product-category
  {
    display:block;
    font-size:13px;
    font-color:gray;
    text-decoration: none;
    margin-left:10px;
  }
.product-category a
{
	text-decoration: none;
	color:gray;
}
h3
{
	border-bottom: none;
}

.support-menu:not(.input-group), * {margin: 0;padding: 0;outline: none;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
div.support-menu {margin: 0px auto;width: 250px;}
.support-menu nav.vertical {border-radius: 4px;box-shadow: 0 0 10px rgba(0,0,0,.15);overflow: hidden;text-align: center;}
.support-menu nav.vertical > ul {list-style-type: none;}
.support-menu nav.vertical > ul > li {display: block;}
.support-menu nav.vertical > ul > li > span 
{
	background-color: rgb(255, 59, 0);
	background-image: linear-gradient(to right, #f99800, #fb8500, #fd7100, #fe5900, #ff3b00);
	/*background-image: -webkit-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));*/
	/*background-image: -moz-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));*/
	/*background-image: -o-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));*/
	/*background-image: linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));*/
	border-bottom: 1px solid rgba(255,255,255,.1);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.1), 0 1px 1px rgba(0,0,0,.1);
	color: rgb(255,255,255);
	display: block;
	font-size: .85rem;
	font-weight: 500;
	height: 50px;letter-spacing: .5rem;
	line-height: 50px;
	text-shadow: 0 1px 1px rgba(0,0,0,.1);text-transform: uppercase;
	transition: all .1s ease;text-decoration: none;
}
.support-menu nav.vertical > ul > li > a:hover {background-color: rgb(114, 51, 98);background-image: -webkit-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));background-image: -moz-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));background-image: -o-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));background-image: linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98)); cursor: pointer;}
.support-menu nav.vertical > ul > li > div {background-color: rgb(255,255,255);}
.support-menu nav.vertical > ul > li > div > ul 
{
	list-style-type: none;
}
.support-menu nav.vertical > ul > li > div > ul > li > a {
	background-color: rgb(255,255,255);border-bottom: 1px solid rgba(0,0,0,.05);color: #333331;display: block;font-size: 1.1rem;padding: 10px 0;text-decoration: none;transition: all 0.15s linear;
}
.support-menu nav.vertical > ul > li > div > ul > li:hover > a 
{
	background-color: lightBlue; color: rgb(255,255,255);padding: 10px 0 10px 50px;
}
.input-group
{
	margin: 15px;
}
</style>

<div class="col-sm-3">
	<div class="support-menu">
		<nav class="vertical">
			<ul>
				<li>
					<span>Search</span>
					<div><ul>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search Product's" name="search_product">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</ul></div>
				</li>
				<li>
					<span>Category</span>
					<div>
						<ul>
						@foreach($category as $x)
							<li><a href="#">{{$x->category_name}}</a></li>
						@endforeach
					</ul>
				</div>
				</li>
					<li>
						<span>Location</span>
						<div>
							<ul>
								<li><a href="#">iOS</a></li>
								<li><a href="#">Android</a></li>
								<li><a href="#">Amazon</a></li>
								<li><a href="#">Windows</a></li>
								<li><a href="#">Chrome OS</a></li>
							</ul>
						</div>
					</li>
					
				</ul>
			</nav>
		</div>
	</div>
