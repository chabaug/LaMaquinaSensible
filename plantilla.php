<?php

$objTemplate = new template;

class template
{
	function __construct()
	{
		session_start();
		include('conexion.php');
		include('constantes.php');
		include('funciones.php');
		// ini_set('session.gc_maxlifetime', 1200);
		// session_set_cookie_params(1200);
		
?>
<!doctype html>
<html>
<head>
	<title>Buscador de salas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="style.css" rel="stylesheet">
	<link href="images/favico.png" rel="icon">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
	<div id="container">
		<nav id="menu">
			<div id="buscar">
				<form action="busquedas.php" method="get" enctype="text/plain" id="busqueda" class="form">
					<input type="text" name="criteria" class="criteria" placeholder="Encontr&aacute; tu sala"></input>
					<select name="barrio" class="select_barrios" id="barrios" placeholder="B&uacute;squeda por barrio">
						<option>Filtrar por barrio</option>
						<?php
							foreach($barrios as $barrio)
							{
								echo "<option value='$barrio'>$barrio</option>"; 
							}
						?>
					</select>
					<div class="franja_horaria">
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
				if(!isset($_SESSION['user']))
				{
					
			?>
			<div id="user_access">
				<ul>
					<li><a href="registro_usuarios.php">Registrarse</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
			<?php
				}
				else
				{
					
					$user_id = $_SESSION['user'];
					
					$q_username = "
									SELECT user FROM users
									WHERE id = '$user_id'
								";
								
					$exec_q_username = mysqli_query($conexion, $q_username);
					
					$username = mysqli_fetch_array($exec_q_username);
			?>
				<div id="user_menu">
					<a href=""><?php echo $username['user']; ?></a>
					<ul>
						<li><a href="user_profile.php">Mi perfil</a></li>
						<li>Mis reservas</li>
						<li><a href="<?php session_destroy(); ?>" id="session_close">Cerrar Sesi&oacute;n</a></li>
					</ul>
				</div>
			<?php
				}
			?>
		</nav>
<?php
	}
	function __destruct()
	{
?>
	</div>
</html>
<?php	
	}
}