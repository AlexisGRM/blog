<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="tabla" method="post">
		{{ csrf_field() }}
		<label for="">A</label><input type="text" name="a">
		<label for="">B</label><input type="text" name="b">
		<label for="">C</label><input type="text" name="c">
		<select name="formas">
			<option value="1">Cubo</option>
  			<option value="2">Prisma Rectangular</option>
  			<option value="3">Piramide</option>
  			<option value="4">Esfera</option>
  			<option value="5">Cono</option>
		</select>
		<input type="submit" value="ok">
	</form>
	
</body>
</html>