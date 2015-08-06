<?php
// procesa_registro.php 
include('conexion.php');

header('refresh: 3; url=index.php');

session_start();

if(isset($_SESSION['user']) || isset($_SESSION['gestor']))
{
	header('location: index.php');
}

if(isset($_POST['registrar_gestor']))
{
	date_default_timezone_set("America/Buenos_Aires");
	
	$nombre = htmlentities($_POST['nombre']);
	$apellido = htmlentities($_POST['apellido']);
	$email = htmlentities($_POST['mail']);
	$telefono = $_POST['telefono'];
	$usuario = htmlentities($_POST['usuario']);
	$clave = md5($_POST['clave']);
	$clave2 = md5($_POST['clave2']);
	$fecha_reg = date('Y/m/d H:i:s');
	$fecha_log = date('Y/m/d H:i:s');
	
	if($clave != $clave2)
	{
		echo "Las contrase&ntilde;as no coinciden<br>";
	}
	else
	{
			
		
		$gestor_exists = "
							SELECT user FROM gestores
							WHERE user = '$usuario'
						";
		
		$g_email_exists = "
								SELECT email FROM gestores
								WHERE email = '$email'
							";
							
		$validate_gestor = mysqli_query($conexion, $gestor_exists);
		$validate_g_email = mysqli_query($conexion, $g_email_exists);
		
		if(mysqli_num_rows($validate_gestor) >= 1) 
		{
			echo "El usuario que ingresaste ya existe.<br>";
		} 
		else 
		{
			if(mysqli_num_rows($validate_g_email) >= 1) 
			{
				echo "El correo electr&oacute;nico que ingresaste ya existe.<br>";
			} 
			else 
			{
				$query = "
						INSERT INTO gestores (user,pass,nombre,apellido,email,telefono,creado_en,last_login)
						VALUES('$usuario','$clave','$nombre','$apellido','$email','$telefono','$fecha_reg','$fecha_log')
					";
						
				$eje = mysqli_query($conexion, $query);
				
				if($eje == true)
				{
					echo "&iexcl;Bienvenido/a $nombre, te has registrado correctamente!<br>Tu nombre de usuario es $usuario<br>";
				} 
				else
				{
					echo "Error en SQL.<br>";
				}
			}
		}
	}
}


if(isset($_POST['registrar_user'])) 
{
	date_default_timezone_set("America/Buenos_Aires");
	
	$nombre = htmlentities($_POST['nombre']);
	$apellido = htmlentities($_POST['apellido']);
	$email = htmlentities($_POST['mail']);
	$telefono = $_POST['telefono'];
	$usuario = htmlentities($_POST['usuario']);
	$clave = md5($_POST['clave']);
	$clave2 = md5($_POST['clave2']);
	$fecha_reg = date('Y/m/d H:i:s');
	$fecha_log = date('Y/m/d H:i:s');
	
	if($clave != $clave2)
	{
		echo "Las contrase&ntilde;as no coinciden<br>";
	}
	else
	{
		$user_exists = "
						SELECT * FROM users
						WHERE user = '$usuario'
					";
				
		$u_email_exists = "
							SELECT * FROM users
							WHERE email = '$email'
						";
		
		$validate_user = mysqli_query($conexion, $user_exists);
		$validate_u_email = mysqli_query($conexion, $u_email_exists);
		
		if(mysqli_num_rows($validate_user) >= 1) {
			echo "El usuario que ingresaste ya existe.<br>";
		} else {
			if(mysqli_num_rows($validate_u_email) >= 1) {
				echo "El correo electr&oacute;nico que ingresaste ya existe.<br>";
			} else {
				$query = "
						INSERT INTO users (user,pass,nombre,apellido,email,telefono,creado_en,last_login)
						VALUES('$usuario','$clave','$nombre','$apellido','$email','$telefono','$fecha_reg','$fecha_log')
					";
						
				$eje = mysqli_query($conexion, $query);
				
				if($eje == true){
					echo "&iexcl;Bienvenido/a $nombre, te has registrado correctamente!<br>Tu nombre de usuario es $usuario<br>";
				} else {
					echo "Error en SQL.<br>";
				}
			}
		}
	}
}
	
?>





