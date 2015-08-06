<?php

## user_profile_edit.php ##

include('conexion.php');
include('constantes.php');
include('plantilla.php');


if(!isset($_SESSION['user']))
{
	header('location: login.php');
}

$id_user = $_SESSION['user'];

$q_datos_user = "
					SELECT id
					,	user
					,	nombre
					,	apellido
					,	email
					,	telefono
					,	barrio
					,	avatar
					,	creado_en
					FROM users
					WHERE id = $id_user
				";

$get_datos_user = mysqli_query($conexion, $q_datos_user);	


$view_datos = mysqli_fetch_array($get_datos_user);
	
?>
<div id="user_profile_edit">
	<div id="avatar">
		<img src="<?php echo $view_datos['avatar']; ?>">
	</div>
	<div class="change_user_data">
		<form action="procesa_log.php" method="post" enctype="multipart/form-data">
<?php
	echo "<label for='new_nombre'>Nombre:</label> <input id='new_nombre' type='text' name='new_nombre' placeholder='".$view_datos['nombre']."'>";
	echo "<label for='new_apellido'>Apellido:</label> <input id='new_apellido' type='text' name='new_apellido' placeholder='".$view_datos['apellido']."'>";
?>
			<label for="new_barrio">Barrio:</label> <select id="new_barrio" name="new_barrio">
<?php
	foreach($barrios as $barrio)
	{
		echo "<option value='$barrio'>$barrio</option>"; 
	}
?>
			</select>
<?php
	echo "<label for='new_email'>Email:</label> <input id='' type='email' name='new_email' placeholder='".$view_datos['email']."'>";
	echo "<label for='new_telefono'>Tel&eacute;fono:</label> <input id='' type='text' name='new_telefono' placeholder='".$view_datos['telefono']."'>";
	echo "<input type='hidden' name='id' value='".$view_datos['id']."'>";
?>		
			<input type="submit" name="new_user_data" class="btn" value="ACEPTAR">
		</form>
	</div>
	<div id="user_configs">
		<a href="user_change_pass.php"><button class="btn" id="change_pass"> Cambiar Contraseña</button></a>
	</div>
</div>