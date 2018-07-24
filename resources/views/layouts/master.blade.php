<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	
	@include('layouts/partials/_nav', ['page' => $page ] )
	
	
	
	@yield('content')

	<footer>
		@yield('footer')
	</footer>
</body>
</html>