<!DOCTYPE html>
<html>
<head>
	<title>Operaciones</title>
</head>
<body>
<form method="POST" action="operaciones.php">
	<label>Ingrese el primer numero</label><br>
	<input type="number" name="Numero1"><br>
	<label>Ingrese el segundo numero</label><br>
	<input type="number" name="Numero2"><br>

	<select name="operacion">
		<option value="sumar">sumar</option>
		<option value="restar">restar</option>
		<option value="multiplicar">multiplicar</option>
		<option value="dividir">dividir</option>								
	</select>

	<button type="submit">Ver resultado</button>
</form>
</body>
</html>