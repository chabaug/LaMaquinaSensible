<?php 

include('conexion.php');

if (isset($_POST['login']))
{
	$user = htmlentities($_POST['user']);
	$pass = md5($_POST['pass']);
	
			
	$validaGestor = "
						SELECT id FROM gestor
						WHERE user = '$user'
						AND pass = '$pass'
					";
	
	$validaUser = "
					SELECT id FROM users
					WHERE user = '$user'
					AND pass = '$pass'
				";
				
	
	$login_gestor = mysqli_query($conexion, $validaGestor);			
	$login_user = mysqli_query($conexion, $validaUser);
		
		
	if(mysqli_num_rows($login_gestor) == 1) 
	{
		$session_gestor = mysqli_fetch_array($login_gestor);
		
		session_start();
		$_SESSION['gestor'] = $session_gestor['id'];
		$gestor_id = $session_gestor['id'];
		$gestor_check_log = "UPDATE gestores SET last_login=NOW() WHERE user = $gestor_id";
		$gestor_check_in = mysqli_query($conexion,$gestor_check_log);
		header('location: user_profile.php?='.$gestor_ud);
	}
	else
	{
		echo "Los datos que ingresaste son incorrectos.";
		header('refresh: 3; url=login.php');
	}

	
	if(mysqli_num_rows($login_user) == 1) 
	{
		$session_user = mysqli_fetch_array($login_user);
		
		session_start();
		$_SESSION['user'] = $session_user['id'];
		$user_id = $session_user['id'];
		$user_check_log = "UPDATE users SET last_login=NOW() WHERE user = $user_id";
		$user_check_in = mysqli_query($conexion,$user_check_log);
		header('location: user_profile.php?='.$user_id);
	} 
	else
	{
		echo "Los datos que ingresaste son incorrectos.";
		header('refresh: 3; url=login.php');
	}
}

if (isset($_POST['new_user_data']))
{
	session_start();
	
	$id_user = $_POST['id'];
	
	$update_begin = "UPDATE users SET ";
	$update_end = "update_en = NOW() WHERE id = $id_user";
	
	if(!empty($_POST['new_nombre']))
	{
		$new_nombre = htmlentities($_POST['new_nombre']);
		$update_begin = $update_begin . "nombre = '$new_nombre', ";
	}
	
	if(!empty($_POST['new_apellido']))
	{
		$new_apellido = htmlentities($_POST['new_apellido']);
		$update_begin = $update_begin . "apellido = '$new_apellido', ";
	}
	
	if(!empty($_POST['new_barrio']))
	{
		$new_barrio = htmlentities($_POST['new_barrio']);
		$update_begin = $update_begin . "barrio = '$new_barrio', ";
	}
	
	if(!empty($_POST['new_email']))
	{
		$new_email = htmlentities($_POST['new_email']);
		$update_begin = $update_begin . "email = '$new_email', ";
	}
	
	if(!empty($_POST['new_telefono']))
	{
		$new_telefono = htmlentities($_POST['new_telefono']);
		$update_begin = $update_begin . "telefono = '$new_telefono', ";
	}
	
	$q_new_user_data = $update_begin . $update_end;
	
	$res_nud = mysqli_query($conexion,$q_new_user_data);
	
	header('location: user_profile_edit.php');
}