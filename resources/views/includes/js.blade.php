{{Html::script('bower_components/jquery/dist/jquery.min.js')}}
{{Html::script('bower_components/jquery-ui/jquery-ui.min.js')}}
{{Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')}}
{{Html::script('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}
{{Html::script('dist/js/adminlte.min.js')}}
{{Html::script('dist/js/pages/dashboard.js')}}
{{Html::script('dist/js/demo.js')}}
{{-- Html::script('sweetAlert/js/sweetalert.min.js') --}}
{{Html::script('js/summernote.js')}}
{{Html::script('js/bootstrap-select.min.js')}}
<script type="text/javascript">
	$('#summernote').summernote({
	  height: 150,
	  minHeight: null,
	  toolbar: [
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'clear'] ],
        ],
	  maxHeight: null
		});
	$('#summernote2').summernote({
	  height: 200,
	  minHeight: null,
	  maxHeight: null
		});
</script>
{{-- @include('sweet::alert') --}}

@yield('js')