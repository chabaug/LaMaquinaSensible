<?php
## reservas.php ##

include('plantilla.php');
include('conexion.php');


?>

<form name="reserva_frm" id="reserva_frm" class="form" method="post">
	<label for="barrio">Selecciona&nbsp;&nbsp;un&nbsp;&nbsp;barrio:</label>
	<select name="r_barrio" id="r_barrio">
		<option>Ninguno</option>
	<?php
		$s_barrio =
					"
						SELECT barrio FROM locales
					";
					
		$q_barrio = mysqli_query($conexion, $s_barrio);
		$arr_barrio = mysqli_fetch_array($q_barrio);
		
		while(mysqli_num_rows($q_barrio) >= 1)
		{
	?>
		<option><?php echo $arr_barrio['barrio']; ?></option>
	<?php
		}
	?>
	</select>
</form>