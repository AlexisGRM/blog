<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="may09" method="post">
		{{ csrf_field() }}
		
		<input type="text" name="nombre">
		<input type="text" name="edad">
		<input type="submit" value="Enviar">
	</form>

</body>
</html>