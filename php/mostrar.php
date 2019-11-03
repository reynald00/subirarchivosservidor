<?php
	include '../conexion/conexion.php';
	$id=$_REQUEST['clave'];
	echo $id;

	$sql="SELECT * FROM archivos WHERE id='$id'";
	$resultado = mysqli_query($conectar,$sql);
	$mostrar = mysqli_fetch_array($resultado);

	$nombre = $mostrar['nombre'];

	if ($nombre == "") {
		echo "No hay documento";
	}else{
		$archivo = "archivos/".$nombre;
		echo '<center><iframe src="'.$archivo.'" width="800" height="500"></iframe></center>';
	}
?>

