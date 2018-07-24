<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
</head>
<body>
	<h1>Events</h1>
	<table>
		
		@forelse($events as $event) {{-- forelse permet de traiter l'expcetion si le tableau donné est vide ! --}}
		<tr>
			<td> {{ $event }} </td>
 		</tr>
 		@empty
 			{{ " Pas d'evenement ! " }}
		@endforelse


	</table>

</body>
</html>