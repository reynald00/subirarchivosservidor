<?php
	$hostname = "localhost";
	$database = "gestor_archivos";
	$username = "root";
	$password = "";

	$conectar = mysqli_connect($hostname,$username,$password,$database)
	or die('Error en la conexión:'.mysli_error());

?>


