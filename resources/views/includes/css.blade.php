{{Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')}}
{{Html::style('bower_components/font-awesome/css/font-awesome.min.css')}}
{{Html::style('bower_components/Ionicons/css/ionicons.min.css')}}
{{Html::style('dist/css/AdminLTE.min.css')}}
{{Html::style('dist/css/skins/_all-skins.min.css')}}
{{Html::style('css/summernote.css')}}
{{Html::style('css/bootstrap-select.min.css')}}
<!-- SweetAlert -->
{{-- Html::style('sweetAlert/css/sweetalert.css') --}}
<!--Summernote -->


<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
	body { padding-top: 10px; }

a.button-login {
	-webkit-transition: all 5000ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	-moz-transition: all 5000ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	-ms-transition: all 5000ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	-o-transition: all 5000ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	transition: all 1500ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	display: block;
	max-width: 180px;
	text-decoration: none;
	border-color:red;
	/*padding: 2px 3px;*/
}

a.button-login {
	color: rgba(30, 22, 54, 0.6);
	/*box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;*/
}

a.button-login:hover {
	color: rgba(255, 255, 255, 0.85);
	box-shadow: rgba(50, 79, 123, 0.67) 0 0px 0px 40px inset;
}

</style>
@yield('css')