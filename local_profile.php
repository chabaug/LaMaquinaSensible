<?php

## local_profile.php ##

include('conexion.php');
include('plantilla.php');

$url_sala = $_SERVER["REQUEST_URI"];
$spl_sala = preg_split("/=/",$url_sala); 
$id_sala = $spl_sala[1];

$q_datos_sala = "
					SELECT 
						nombre,
						direccion,
						barrio,
						cant_salas,
						telefono				
					FROM locales
					WHERE id = $id_sala
				";

$get_datos_sala = mysqli_query($conexion, $q_datos_sala);	


$view_datos = mysqli_fetch_array($get_datos_sala);
?>
<div id="local_profile">
	<div id="img_local">
		<img src="http://lorempixel.com/200/200">
	</div>
	<div id="datos_local">
		<ul>
<?php
	echo "<li id='nombre_sala'>".$view_datos['nombre']."</li>";
	echo "<li><u>Direccion</u>:&nbsp;&nbsp;".$view_datos['direccion']."</li>";
	echo "<li><u>Ubicacion</u>:&nbsp;&nbsp;".$view_datos['barrio']."</li>";
	echo "<li><u>Cantidad de salas</u>:&nbsp;&nbsp;".$view_datos['cant_salas']."</li>";
	// echo "<li><u>Horario</u>:&nbsp;&nbsp;".$view_datos['horario']."</li>";
	echo "<li><u>Telefono</u>:&nbsp;&nbsp;".$view_datos['telefono']."</li>";
?>
		</ul>
	</div>
	<div id="mapa_local">
		<?php echo "<iframe src=\"https://www.google.com/maps/embed/v1/search?q=".$view_datos['direccion']."+Buenos+Aires,+Ciudad+Autonoma+de+Buenos+Aires,+Argentina&key=AIzaSyCEVDyiPjRd425Vs1CPAQqoOVvtX4QzXUM\"  allowfullscreen></iframe>"; ?>
	</div>
</div>
