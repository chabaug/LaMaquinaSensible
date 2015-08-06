<?php

## local_profile.php ##

include('conexion.php');
include('plantilla.php');


if(!isset($_SESSION['user'])) 
{
	header('location: index.php');
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
					,	creado_en
					,	avatar
					FROM users
					WHERE id = $id_user
				";

$get_datos_user = mysqli_query($conexion, $q_datos_user);	


$view_datos = mysqli_fetch_array($get_datos_user);
	
?>
<div id="user_profile">
	<div id="avatar">
		<img src="http://lorempixel.com/200/200">
	</div>
	<div id="datos_user">
		<ul>
<?php
	echo "<li id='nombre_user'>".$view_datos['nombre']." ".$view_datos['apellido']."</li>";
	echo "<li>".$view_datos['user']."</li>";
	echo "<li>".$view_datos['barrio']."</li>";
	echo "<li>".$view_datos['email']."</li>";
	echo "<li>".$view_datos['telefono']."</li>";
	echo "<li>Miembro desde: ".$view_datos['creado_en']."</li>";
?>
		</ul>
	</div>
	<div id="user_configs">
		<a href="user_change_pass.php"><button class="btn" id="change_pass"> Cambiar Contraseña </button></a>
		<a href="user_profile_edit.php"><button class="btn" id="profile_edit"> Editar Perfil </button></a>
	</div>
</div>


