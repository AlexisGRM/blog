<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="/Ejercicio2" method="post">
    @csrf
    <h1>Operaciones</h1>
    <h2>Operaciones Aritmetias Basicas</h2>
    <input type="text" name="Valor1"  placeholder="Ingresar Valor 1">
    <input type="text" name="Valor2"  placeholder="Ingresar Valor 2">
    <h2>Teorema de pitagoras</h2>
    <input type="text" name="Valor3"  placeholder="Ingresar Valor de A">
    <input type="text" name="Valor4"  placeholder="Ingresar Valor de B">
    <h2>Formula General</h2>
    <input type="text" name="Valor5"  placeholder="Ingresar Valor de A">
    <input type="text" name="Valor6"  placeholder="Ingresar Valor de B">
    <input type="text" name="Valor7"  placeholder="Ingresar Valor de C">
    <h2>Lista de numeros</h2>
    <input type="text" name="Valor8"  placeholder="Ingresar Limite">
    <h2>Tablas</h2>
    <input type="text" name="Valor9"  placeholder="Ingresar Limite de las Tablas">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
