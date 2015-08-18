<?php include('plantilla.php') ?>
<div id="registro">
	<form action="procesa_registro.php" method="post">
		<input type="text" name="nombre" id="nombre" placeholder="NOMBRE" required>
		<input type="text" name="apellido" id="apellido" placeholder="APELLIDO" required>
		<input type="email" name="mail" id="mail" placeholder="EMAIL" required>
		<input type="tel" name="telefono" id="telefono" placeholder="TELEFONO" maxlength="20">
		<input type="text" name="usuario" id="usuario" placeholder="USUARIO" required>
		<input type="password" name="clave" id="clave" placeholder="CONTRASE&Ntilde;A" required>
		<input type="submit" name="registrar" value="Registrarse">
	</form>
</div>