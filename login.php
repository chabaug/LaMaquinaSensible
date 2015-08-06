<?php
include ('plantilla.php');
if(isset($_SESSION['user']))
{
	header('location: user_profile.php');
}
?>

<div id="login">
	<h1>b i e n v e n i d o</h1>
	<br>
	<form method="post" action="procesa_log.php" class="form-admin">
		<input type="text" name="user" id="user" class="frm-input" placeholder="USUARIO" required>
		<input type="password" name="pass" class="frm-input" id="pass" placeholder="CONTRASE&Ntilde;A" required>
		<input type="submit" name="login" class="frm-button" value="Ingresar">
	</form>
</div>
