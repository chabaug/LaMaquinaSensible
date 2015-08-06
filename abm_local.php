<?php
## abm_local.php ##

include('plantilla2.php');
include('funciones.php');
include('constantes.php');

?>

	

<form action="abm_local.php" method="post" name="abmLocal" class="form" id="abm">
	<table>
		<tr>
			<td colspan="8">
				<h1>Crear local</h1>
			</td>
		</tr>
		
		<tr>
			<td><label for="nombreLocal">Nombre&nbsp;&nbsp;de&nbsp;&nbsp;local</label></td>
			<td><label for="cantSalas">Cantidad&nbsp;&nbsp;de&nbsp;&nbsp;salas</label></td>
			<td><label for="direccion">Direccion</label></td>
		</tr>
		
		<tr>
			<td><input type="text" name="nombreLocal" id="nombreLocal" maxlength="50"></td>
			<td><input type="text" name="cantSalas" id="cantSalas" maxlength="2"></td>
			<td><input type="text" name="direccion" id="direccion"></td>
		</tr>
	</table>
	
	<table>
		<tr>
			<td><label for="telefono">Telefono</label></td>
			<td><label for="barrio">Barrio</label></td>
		</tr>
		
		<tr>
			<td><input type="text" name="telefono" id="telefono" maxlength="20"></td>
			<td>
				<select name="barrio" id="barrio" placeholder="B&uacute;squeda por barrio">
					<?php
						foreach($barrios as $barrio)
						{
							echo "<option value='$barrio'>$barrio</option>"; 
						}
					?>
				</select>
			</td>
		</tr>
	</table>
	
	<table>
		<tr>
			<td><label for="dias">Dias</label></td>
			<td><label for="apertura">Apertura</label></td>
			<td><label for="cierre">Cierre</label></td>
		</tr>

				
		<tr>
			<td>
				<ul id="dias">
					<li>
						<input type="checkbox" id="Mon" name="dias[]" value="Mon" onclick="input_ac(this)" class="dia"><span class="days">Lunes</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Tue" name="dias[]" value="Tue" onclick="input_ac(this)" class="dia"><span class="days">Martes</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Wed" name="dias[]" value="Wed" onclick="input_ac(this)" class="dia"><span class="days">Miercoles</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Thu" name="dias[]" value="Thu" onclick="input_ac(this)" class="dia"><span class="days">Jueves</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Fri" name="dias[]" value="Fri" onclick="input_ac(this)" class="dia"><span class="days">Viernes</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Sat" name="dias[]" value="Sat" onclick="input_ac(this)" class="dia"><span class="days">Sabado</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Sun" name="dias[]" value="Sun" onclick="input_ac(this)" class="dia"><span class="days">Domingo</span>
					</li>
				</ul>
			</td>
			
			<td class="horarios_ac">
				<select name="apertura_Mon" id="apertura_Mon" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="apertura_Tue" id="apertura_Tue" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="apertura_Wed" id="apertura_Wed" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="apertura_Thu" id="apertura_Thu" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="apertura_Fri" id="apertura_Fri" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="apertura_Sat" id="apertura_Sat" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="apertura_Sun" id="apertura_Sun" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
			</td>
			
			<td class="horarios_ac">
				<select name="cierre_Mon" id="cierre_Mon" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="cierre_Tue" id="cierre_Tue" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>				
				<select name="cierre_Wed" id="cierre_Wed" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="cierre_Thu" id="cierre_Thu" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>				
				<select name="cierre_Fri" id="cierre_Fri" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="cierre_Sat" id="cierre_Sat" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
				<select name="cierre_Sun" id="cierre_Sun" class="select_hora" disabled>
					<?php selector_horas();?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td colspan="8">
				<input type="submit" value="Alta" name="alta">
			</td>
		<tr>
	</table>
<form>

<script type="text/javascript">

function input_ac(elem) 
{
	var id = $(elem).attr("id");

	$("#".concat(id)).change(function(){
		if ($("#".concat(id)).is(":checked") == true){
			$("#apertura_".concat(id)).prop('disabled', false);
			$("#cierre_".concat(id)).prop('disabled', false);
		} else {
			
			$("#apertura_".concat(id)).prop('disabled', true);
			$("#cierre_".concat(id)).prop('disabled', true);
		}
	});
}
</script>

<?php


if(isset($_POST['alta'])) {
	if($_POST['nombreLocal'] == "" || $_POST['cantSalas'] == "" || $_POST['direccion'] == "" || $_POST['telefono'] == "") {
		echo "<center>Por favor, completa todos los campos</center>";
		die;
	} elseif(isset($_POST)) {
		
		$nombreLocal = htmlentities($_POST['nombreLocal']);
		$cantSalas = $_POST['cantSalas'];
		$direccion = htmlentities($_POST['direccion']);
		$telefono = $_POST['telefono'];
		$barrio = htmlentities($_POST['barrio']);
	
		//GENERAR HORARIO
		$horarioArray = array();
		foreach ($week as $w) {
			if(isset($_POST['apertura_'.$w])){
				$apertura = intval($_POST['apertura_'.$w]);
				$cierre = intval($_POST['cierre_'.$w]);
				$horarioArray[$w] = ['apertura' => $apertura, 'cierre' => $cierre];
			}
		}
		$horario = json_encode($horarioArray);
		
		//session_start();
		
		//Verificar si el local ya existe en la base
		$ver_loc = 
					"
						SELECT nombre FROM locales
						WHERE nombre = '$nombreLocal'
					";
		
		$val_loc = mysqli_query($conexion, $ver_loc);
		
		if(mysqli_num_rows($val_loc) >= 1){	
			echo "<center>El local \"$nombreLocal\" ya esta registrado.</center>";
		} else {
		
			$altaLocal = "
					INSERT INTO locales (
						nombre,
						cant_salas,
						direccion,
						telefono,
						barrio,
						horario,
						creado_en,
						update_en
					)
					
					VALUES (
						'$nombreLocal',
						'$cantSalas',
						'$direccion',
						'$telefono',
						'$barrio',
						'$horario',
						NOW(),
						NOW()
					)
			";
	
			$query = mysqli_query($conexion, $altaLocal);
			
			//Verificar que se ejecute la query o mostrar error
			if($query == false){
				echo "Error en SQL";
			} else {
					
				
				$sLocal = " 
					SELECT id 
					FROM locales
					WHERE nombre = '$nombreLocal'
				";
				
				$x = mysqli_query($conexion, $sLocal);
				$local = mysqli_fetch_array($x);
				
				$id = $local['id'];
				//Crea las Salas del Local - agregar creado_en, update, etc
				$i = 1;
				do {
					$altaSala = "
						INSERT INTO salas (
							local_id,
							nombre
						)
						VALUES (
							$id,
							'$i'
						)
					";
					mysqli_query($conexion, $altaSala);
					$i++;
				}
				while ( $i <= $cantSalas);
			
				//Traemos las Salas del Local
				$q_sala_id = " 
					SELECT id
					FROM salas
					WHERE local_id = $id
				";
				$r_sala_id = mysqli_query($conexion, $q_sala_id);
	
				for ($p = 0; $p < mysqli_num_rows($r_sala_id); $p++) {
						$row_sala = mysqli_fetch_row($r_sala_id);
						$q_llena_cal = llenar_calendario($row_sala[0], $horarioArray, $cantidad_dias);
						$val_llena_cal = mysqli_multi_query($conexion,$q_llena_cal);
				}
			}
		}
	}
}
?>