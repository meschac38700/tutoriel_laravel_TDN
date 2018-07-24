<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
</head>
<body>
	<h1>Events</h1>
	<table>
		
		@foreach($events as $event)
		<tr>
			<td> {{ $event }} </td>
 		</tr>
		@endforeach


	</table>

</body>
</html>