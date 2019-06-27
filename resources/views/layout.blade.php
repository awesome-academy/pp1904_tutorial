<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - Awesome Academy</title>

	<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
	@section('stylesheet')
	@show
</head>
<body>

	<div class="sidebar">
		@section('sidebar')
			this section
		@show
	</div>

	<div class="content">
		@yield('content')
	</div>

	<script type="text/javascript">1</script>
	@section('scripts')
	@show
	
	@include('js')
</body>
</html>