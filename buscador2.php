<?php 
## buscador.php ##

include('conexion.php');
include('funciones.php');
include('plantilla.php');

if($_GET)
{
	$GET_criteria = htmlentities($_GET['criteria']);
	$GET_barrio = htmlentities($_GET['barrio']);
	$GET_desde = $_GET['hora_ini'];
	$GET_hasta = $_GET['hora_fin'];
}
?>
<div id="buscar">
	<h1>Encontra tu sala</h1>
	<form action="buscador.php" method="get" enctype="text/plain" id="busqueda" class="form">
		<input type="text" name="criteria" id="criteria" placeholder="Encontr&aacute; tu sala"></input>
		<br>
		<select name="barrio" id="barrios" placeholder="B&uacute;squeda por barrio">
			<option>Filtrar por barrio</option>
			<?php
				foreach($barrios as $barrio)
				{
					echo "<option value='$barrio'>$barrio</option>"; 
				}
			?>
		</select>
		<br>
		<br>
		<div id="franja_horaria">
			<label for="hora_ini"></label>
			<select name="hora_ini" id="hora_ini" class="select_hora" disabled>
			<option>Desde:</option>
				<?php #selector_horas();?>
			</select>
			<select name="hora_fin" id="hora_fin" class="select_hora" disabled>
			<option>Hasta:</option>
				<?php #selector_horas();?>
			</select>
		</div>
		
		<input type="submit" value="Buscar" id="enviar" name="busca" class="btn">
	</form>
</div>

<?php
	if (empty($_GET['criteria'])) {
		$GET_criteria = 'NULL';
	}

	if(isset($_GET['busca'])){$results = "results";} else {$results = "";}
?>

<div id="<?php echo $results; ?>">
	<?php 
		// Si recibe un formulario
		if(isset($_GET['busca']))
		{
			//Asigna consulta a una variable
			$consulta_s = "
							SELECT id,
								nombre,
								direccion,
								telefono,
								barrio,
								cant_salas
							FROM locales
							WHERE (nombre LIKE '%$GET_criteria%' 
							OR barrio LIKE '%$GET_criteria%' 
							OR barrio = '$GET_barrio')
							ORDER by nombre
						";
						
						
			//Ejecuta la consulta
			$result = mysqli_query($conexion, $consulta_s);
			
			//Condicion que la variable $array reciba resultados
			if(mysqli_num_rows($result) >= 1) 
			{
				while($local = mysqli_fetch_array($result)) 
				{
					$id_local = $local['id'];
					echo "<div class='resultado' id='$id_local'>";
					echo "<a href='local_profile.php?id_result=$id_local' target='_blank'>";
					echo "<ul>";
					echo "<li><iframe class='mapa' src='https://www.google.com/maps/embed/v1/search?q=".$local['direccion']."+Buenos+Aires,+Ciudad+Autonoma+de+Buenos+Aires,+Argentina&key=AIzaSyCEVDyiPjRd425Vs1CPAQqoOVvtX4QzXUM'  allowfullscreen></iframe></li>";
					echo "<li>".$local['nombre']."</li>";
					echo "<li>".$local['direccion']."</li>";
					echo "</ul>";
					echo "</a>";
					echo "<button type='button' class='btn' id='btn-reserva'><a href='reservas.php' target='_blank'>Reserv&aacute;</a></button>";
					echo "</div>";
				}
			} 
			else 
			{
				echo "<center>La&nbsp;&nbsp;busqueda&nbsp;&nbsp;no&nbsp;&nbsp;arrojo&nbsp;&nbsp;resultados</center>";
			}

		}
	
	?>
</div>