<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	
	@include('layouts/partials/_nav')
	
	<h1>{{$page}}</h1>
	
	@yield('content')

	<footer>
		@yield('footer')
	</footer>
</body>
</html>