<?php
## funciones.php ##
include('constantes.php');

function selector_horas() 
{
	for($i = 1; $i <= 24;$i++)
	{
		echo "<option value='$i'>$i:00 hs.</option>";
	}
}

function generar_horario($dias, $apertura, $cierre) 
{
	
	$horario_generado = [];
	
	foreach ($dias as $dia) 
	{
		$horario_generado[$dia] = ['apertura' => $apertura, 'cierre' => $cierre];
	}
	
	return $horario_generado;
}


function llenar_calendario($sala_id, $sala_horario, $cant_dias) 
{
	
	include('conexion.php');

	for($i = 0; $i < $cant_dias; $i++) 
	{
		$d = strtotime("+".$i." days");
		$dia_semana = date('D', $d);
		$fecha = date('Y-m-d', $d);
		
		if (isset($sala_horario[$dia_semana])) 
		{
			$hora_apertura = intval($sala_horario[$dia_semana]['apertura']);
			$hora_cierre = intval($sala_horario[$dia_semana]['cierre']);
		
			for($j = $hora_apertura; $j < $hora_cierre; $j++) 
			{
				$query = "INSERT INTO calendario 
							(
								sala_id,
								fecha,
								hora
							) 
								VALUES (
								$sala_id,
								'$fecha',
								$j
							);
						";
					$val_ciclo = mysqli_query($conexion, $query);
			}
		}
	}
}

			



?>