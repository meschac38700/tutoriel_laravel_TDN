<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
</head>
<body>
	<h1>Events</h1>
	<table>
		<?php foreach ($events as $key => $value):?>
		<tr>
			<td> <?= $key ?> </td> <td><?= $value ?> </td>
 		</tr>
		<?php endforeach?>
	</table>

</body>
</html>