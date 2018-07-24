<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', "default Title")</title>
</head>
<body>
	
	@include('layouts/partials/_nav' ) {{-- ce partial a egalement access aux variables presentes dans ce layout --}}

	@yield('content')

	<footer>
		@yield('footer')
	</footer>

	@stack('scripts.footer')
	
</body>
</html>