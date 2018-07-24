<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>
	<h1>Accueil</h1>

	<p>{{ $last_name . $first_name }} </p>
	@if( 1==2 ) {{-- unless = à moins que...--}} 
		{{ " 1 = 2 " }}
	@elseif( 2 == 3 )
		{{ " 2 = 3 " }}
	@elseif( 5 == 5 )
		{{" 5 = 5"}}
	@else
		{{ "sinon "}}
	@endif
</body>
</html>