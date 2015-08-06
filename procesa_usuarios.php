<?php
## procesa_password.php ##

include('conexion.php');

session_start();

if(!isset($_SESSION['user']))
{
	header('location: login.php');
}

if(isset($_POST['changepass']))
{
	$old_pass = md5($_POST['old_pass']);
	$new_pass = md5($_POST['new_pass']);
	$new_pass2 = md5($_POST['new_pass2']);
	$id_user = $_POST['id'];
	
	if($new_pass != $new_pass2)
	{
		echo "Las contrase&ntilde;as no coinciden.";
	}
	
	$match_pass = "
					SELECT id, pass FROM users WHERE pass = '$old_pass' AND id = $id_user
				";
				
	$exe_match_pass = mysqli_query($conexion, $match_pass);
	
	if(mysqli_num_rows($exe_match_pass) == 0)
	{
		echo "La contrase&ntilde;a que ingresaste es incorrecta.";
	}
	else
	{
		echo "Modificaste tu contrase&ntilde;a. Te recomendamos que anotes tu contrase&ntilde;a nueva.";
		
		$change_pass = "
						UPDATE users SET
						pass = '$new_pass'
						WHERE id = $id_user
					";
					
		$exe_change_pass = mysqli_query($conexion, $change_pass);
	}
	
	header('refresh: 3;url=user_change_pass.php');
}