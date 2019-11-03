<?php
	
	include ("../conexion/conexion.php");

	$carpeta = '../archivos/';

	$nombre = $_FILES['file']['name'];
	$ruta = $_FILES['file']['tmp_name'];
	$destino = $carpeta.$nombre;

	if(copy($ruta,$destino)){

		$sql = "INSERT INTO archivos(nombre)values('$nombre')";
		$resultado = mysqli_query($conectar,$sql);
		if ($resultado) {
			echo "Archivo guardado con exito";
		}

	}
?>

