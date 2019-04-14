{{Html::script('bower_components/jquery/dist/jquery.min.js')}}
{{Html::script('bower_components/jquery-ui/jquery-ui.min.js')}}
{{Html::script('js/jquery.dataTables.min.js')}}
<script>
      $(document).ready(function() {
        $('#myTable').DataTable({
    "bLengthChange": false,
    "bFilter": true,
    "searching": false,
     });
});
    </script>
{{Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')}}
{{Html::script('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}
{{Html::script('dist/js/adminlte.min.js')}}
{{Html::script('dist/js/pages/dashboard.js')}}
{{Html::script('dist/js/demo.js')}}

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
</script>
@yield('js')