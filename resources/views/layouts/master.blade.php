<!DOCTYPE html>
<html>
<head>
	<title>@yield('head_title', 'Event')</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>@yield('title')</h1>
	@yield('content')
	<footer>
		@yield('footer')
	</footer>
	@stack('scripts')
</body>
</html>