<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>
	<h1>Accueil</h1>

	<p>{{ $last_name . $first_name }} </p>
	@unless( $isWeekend ) // unless = à moins que...
		{{ " va travailler ! " }}
	@else
		{{ " va t'amuser ! " }}
	@endif
</body>
</html>