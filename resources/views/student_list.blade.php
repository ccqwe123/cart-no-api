@extends('layout.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<a href="/add_student" class="btn btn-primary">Add Student</a>
			<select name="dropDown" id="dropDown">
				<option value="nl">NL</a></option>
				<option value="fil">PH</option>
				<option value="en">EN</option>
				<option value="pl">PL</option>
			</select>
			<div class="col-md-12">
				<table class="table table-responsive">
					<tr>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Action</th>
					</tr>
					@foreach($variable as $x)
					<tr>
						<td>{{$result}}</td>
						<td>{{$x->middlename}}</td>
						<td>{{$x->lastname}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
	var dropDownValue = document.getElementById("dropDown");

dropDownValue.onchange = function() {
  if (this.selectedIndex !== 0) {
    window.location.href = this.value;
  }
};
</script>
@endsection
