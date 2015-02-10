<html>
	<head>
		{{HTML::style('css/bootstrap.min.css');}}
		{{HTML::style('css/jquery.datetimepicker.css');}}
	</head>
	<body>
		@include('layouts.header')
		
		<div class='container' style='margin-top:50px;'>
			@if(Session::has('success'))
				<div class='alert alert-success'>{{Session::get('success');}}</div>
			@endif
			@if(Session::has('error'))
				<div class='alert alert-danger'>{{Session::get('error');}}</div>
			@endif
			@yield('content')
		</div>

		footer

		@section('script')
			{{HTML::script('js/jquery.js'); }}
			{{HTML::script('js/bootstrap.min.js');}}
			{{HTML::script('js/jquery.datetimepicker.js');}}
		@show
	</body>
</html>