<?php
	$objPlantilla = new plantilla();
	class plantilla
	{
		function __construct()
		{
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>La M&aacute;quina Sensible</title>
	<link href="custom.css" rel="stylesheet">
	<link href="images/favico.png" rel="icon">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
</head>
<body>
	<div id="container">
		<header>
			<a href="buscador.php"><img src="images/center.gif" alt="Isologo de La Maquina Sensible"></a>
		</header>
<?php
		}
		
		function __destruct()
		{
?>
	</div>
</body>
</html>
<?php
		}
	}