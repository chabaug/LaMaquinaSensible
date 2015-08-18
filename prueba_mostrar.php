<?php

include('plantilla.php');
include('conexion.php');
include('funciones.php');
?>

	

<form action="prueba_mostrar.php" method="post" name="abmLocal" class="form" id="abm">
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
					<option value="Almagro">Almagro</option>
					<option value="Belgrano">Belgrano</option>
					<option value="Boedo">Boedo</option>
					<option value="Caballito">Caballito</option>
					<option value="Chacarita">Chacarita</option>
					<option value="Colegiales">Colegiales</option>
					<option value="Congreso">Congreso</option>
					<option value="Flores">Flores</option>
					<option value="Palermo">Palermo</option>
					<option value="Parque Patricios">Parque Patricios</option>
					<option value="Villa Crespo">Villa Crespo</option>
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
						<input type="checkbox" id="Mon" name="Mon" value="Mon" onclick="input_ac(this)" class="dia"><span class="days">Lunes</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Tue" name="Tue" value="Tue" onclick="input_ac(this)" class="dia"><span class="days">Martes</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Wed" name="Wed" value="Wed" onclick="input_ac(this)" class="dia"><span class="days">Miercoles</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Thu" name="Thu" value="Thu" onclick="input_ac(this)" class="dia"><span class="days">Jueves</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Fri" name="Fri" value="Fri" onclick="input_ac(this)" class="dia"><span class="days">Viernes</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Sat" name="Sat" value="Sat" onclick="input_ac(this)" class="dia"><span class="days">Sabado</span>
					</li>                                              
					<li>                                               
						<input type="checkbox" id="Sun" name="Sun" value="Sun" onclick="input_ac(this)" class="dia"><span class="days">Domingo</span>
					</li>
				</ul>
			</td>
			
			<td>
				<select name="apertura_Mon" id="apertura_Mon" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				<select name="apertura_Tue" id="apertura_Tue" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				<select name="apertura_Wed" id="apertura_Wed" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				<select name="apertura_Thu" id="apertura_Thu" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				<select name="apertura_Fri" id="apertura_Fri" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				<select name="apertura_Sat" id="apertura_Sat" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				<select name="apertura_Sun" id="apertura_Sun" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
			</td>
			
			<td>
				<select name="cierre_Mon" id="cierre_Mon" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				
				<select name="cierre_Tue" id="cierre_Tue" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				
				<select name="cierre_Wed" id="cierre_Wed" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				
				<select name="cierre_Thu" id="cierre_Thu" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				
				<select name="cierre_Fri" id="cierre_Fri" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				
				<select name="cierre_Sat" id="cierre_Sat" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
				
				<select name="cierre_Sun" id="cierre_Sun" class="select_hora" disabled>
					<option value="h1">1 hs.</option>
					<option value="h2">2 hs.</option>
					<option value="h3">3 hs.</option>
					<option value="h4">4 hs.</option>
					<option value="h5">5 hs.</option>
					<option value="h6">6 hs.</option>
					<option value="h7">7 hs.</option>
					<option value="h8">8 hs.</option>
					<option value="h9">9 hs.</option>
					<option value="h10">10 hs.</option>
					<option value="h11">11 hs.</option>
					<option value="h12">12 hs.</option>
					<option value="h13">13 hs.</option>
					<option value="h14">14 hs.</option>
					<option value="h15">15 hs.</option>
					<option value="h16">16 hs.</option>
					<option value="h17">17 hs.</option>
					<option value="h18">18 hs.</option>
					<option value="h19">19 hs.</option>
					<option value="h20">20 hs.</option>
					<option value="h21">21 hs.</option>
					<option value="h22">22 hs.</option>
					<option value="h23">23 hs.</option>
					<option value="h24">24 hs.</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="8">
				<input type="submit" value="Alta">
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

$cantidad_dias = 30; //Dias que genera el Calendario del Local 

if ($_POST) {
	$nombreLocal = $_POST['nombreLocal'];
	$cantSalas = $_POST['cantSalas'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$barrio = $_POST['barrio'];
	$dias = $_POST['dias'];
	$apertura = intval($_POST['apertura']);
	$cierre = intval($_POST['cierre']);
	
	//session_start();
	
	$horarioArray = generar_horario($dias,$apertura,$cierre);
	$horario = json_encode($horarioArray);
	
//	var_dump($horario);
	
	//ANTES DE INSERTAR HAY QUE VALIDAR QUE LOS DATOS NO EXISTAN
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
		//$a_sala_id = mysqli_fetch_array($r_sala_id);

		//var_dump($a_sala_id);
		for ($p = 0; $p < mysqli_num_rows($r_sala_id); $p++) {
				$row_sala = mysqli_fetch_row($r_sala_id);
				var_dump($row_sala);
				$q_llena_cal = llenar_calendario($row_sala[0], $horarioArray, $cantidad_dias);
				$val_llena_cal = mysqli_multi_query($conexion,$q_llena_cal);
		}
	}
	
	mysqli_close($conexion);
	//session_destroy();
}

?>