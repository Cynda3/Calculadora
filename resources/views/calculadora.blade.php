<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<h2 style="background-color: lightgrey"><b>Calculadora de {{$nombre}}</b></h2>
	<form action="operacion" method="get">
		@csrf
		<input type="hidden" name="nombre" value="{{$nombre}}">
		<p>Primer numero:</p>
		<input type="text" name="num1">
		<p>Segundo numero:</p>
		<input type="text" name="num2"></br>
		<button type="submit" name="operacion" value="sumar">+</button>
		<button type="submit" name="operacion" value="restar">-</button>
		<button type="submit" name="operacion" value="multiplicar">*</button>
		<button type="submit" name="operacion" value="dividir">/</button>

	</form>
	
	<h3>Resultado:</h3>
	<div style="color: blue;" id="resultado">@if(isset($resultado)){{$resultado}}@endif</div>

</body>
</html>
