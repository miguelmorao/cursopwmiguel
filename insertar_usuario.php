<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8">
			<meta name="description" content="Ejercicio 1 de programación web">
			<meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport">
			<meta name="keywords" content="Programación, web">
			<meta name="robots" content="noindex, nofollow">
			<meta name="googlebot" content="noindex, nofollow">
			<title>Ejercicio 1 de Programación web</title>
			<link href="movil.css" rel="stylesheet" media="all and (min-width:0px) and (max-width: 480px)" />
			<link href="tablet.css" rel="stylesheet" media="all and (min-width: 481px) and (max-width: 800px)" />
			<link href="escritorio.css" rel="stylesheet" media="all and (min-width: 801px)" />	
		</head>	
		<body>
		
<section class="formulario">
<center>
	 <h1>Registrarse:</h1>
	<form action="insertar_usuario.php" name="insertar" method="post">
		<p class="campo">Usuario:* &nbsp;<input type="text" name="usuario" size="10" maxlenght="10" required></p>
		<p class="campo">Clave:*&nbsp; &nbsp;  &nbsp;<input type="text" name="miclave" id="miclave" size="10" maxlenght="10" required></p>
		<p class="campo">Correo:* &nbsp;  &nbsp;<input type="mail" name="micorreo" id="micorreo"></p>
		<p class="campo"><input type="submit" name="Insertar" value="registrarse"></p>
		
	</form>
	<p></p>
	<p></p>
<br/>
<br/>
<br/>
		<p>Los campos marcados (*) deben de ser llenados obligatorio</P><a href="index.html">volver al inicio</a></p></center>
</section>
</body>
</html>