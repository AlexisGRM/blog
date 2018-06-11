<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edades</title>
</head>
<body>
  <form action="may09" method="post">
    @csrf
    <input type="text" name="nombre"  placeholder="Ingresar Nombre">
    <input type="text" name="edad"  placeholder="Ingresar Edad">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
