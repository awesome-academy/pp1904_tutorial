@extends('layout')

@section('title', 'Trang chủ')
@section('scripts')
	<script type="text/javascript">2</script>
	{{ HTML::script('js/functions.js', ['async' => 'async']) }}

	<script src="{{ mix('/js/app.js') }}"></script>
@endsection
@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

@section('sidebar')
	<pre>
		Introduction
		Basic Controllers
		Defining Controllers
		Controllers & Namespaces
		Single Action Controllers
		Controller Middleware
		Resource Controllers
		Partial Resource Routes
		Naming Resource Routes
		Naming Resource Route Parameters
		Localizing Resource URIs
		Supplementing Resource Controllers
		Dependency Injection & Controllers
		Route Caching
	</pre>
@endsection


@section('content')
	<h1>This is a heading</h1>
	<p>This is a paragraph.</p>
@endsection


