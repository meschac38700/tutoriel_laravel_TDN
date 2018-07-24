<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>
	<h1>Accueil</h1>

	<p>{{ $last_name . $first_name }} </p>
	@if( $isWeekend )
		{{ " va t'amuser ! " }}
	@else
		{{ " va travailler ! " }}
	@endif
</body>
</html>