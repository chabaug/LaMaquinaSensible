<?php
## procesa_password.php ##

include('conexion.php');

session_start();

if(!isset($_SESSION['user']) || !isset($_SESSION['gestor']))
{
	header('location: login.php');
}

if(isset($_POST['changepass']))
{
	
}