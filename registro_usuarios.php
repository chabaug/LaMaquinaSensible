<?php 

include('plantilla.php');
if(isset($_SESSION['user']) || isset($_SESSION['gestor']))
{
	header('location: index.php');
}

?>
<div id="registro">
	<h2>REGISTRO:</h2>
	<form action="procesa_registro.php" method="post">
		<input type="text" name="nombre" id="nombre" placeholder="NOMBRE" required>
		<input type="text" name="apellido" id="apellido" placeholder="APELLIDO" required>
		<input type="email" name="mail" id="mail" placeholder="EMAIL" required>
		<input type="tel" name="telefono" id="telefono" placeholder="TELEFONO" maxlength="20">
		<input type="text" name="usuario" id="usuario" placeholder="USUARIO" required>
		<input type="password" name="clave" id="clave" placeholder="CONTRASE&Ntilde;A" maxlength="20" required>
		<input type="password" name="clave2" id="clave2" placeholder="REPETIR CONTRASE&Ntilde;A" maxlength="20" required>
		<input type="submit" name="registrar_user" value="Registrarse">
	</form>
</div>