<?php

## local_profile.php ##

include('conexion.php');
include('plantilla.php');


if(!isset($_SESSION['user']))
{
	header('location: login.php');
}

$id_user = $_SESSION['user'];

$q_datos_user = "
					SELECT * FROM users
					WHERE id = $id_user
				";

$get_datos_user = mysqli_query($conexion, $q_datos_user);	


$view_datos = mysqli_fetch_array($get_datos_user);
?>
<div id="user_profile">
	<div id="avatar">
		<img src="http://lorempixel.com/200/200">
	</div>
	<div class="change_user_data">
		<h2><?php echo $view_datos['nombre']; ?></h2>
		<form action="procesa_usuarios.php" method="post" enctype="multipart/form-data">
			<label for="old_pass">Ingrese su contrase&ntilde;a actual:</label>
			<input type="password" name="old_pass" id="old_pass" required>
			<label for="new_pass">Ingrese su nueva contrase&ntilde;a:</label>
			<input type="password" name="new_pass" id="new_pass" required>
			<label for="new_pass2">Repita su nueva contrase&ntilde;a:</label>
			<input type="password" name="new_pass2" id="new_pass2" required>
			<input type="hidden" name="id" value="<?php echo $view_datos['id']; ?>">
			<input type="submit" name="changepass" class="btn" value="Modificar">
		</form>
	</div>
</div>
