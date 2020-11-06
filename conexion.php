<?php
	function conectar_bd($query){
	$DB_SERVER= "localhost";
	$DB_USER="root";
	$DB_DATABASE="comedor";
	$DB_PWD="";
	

	$conexion=mysqli_connect($DB_SERVER,$DB_USER,$DB_PWD) or die("ERROR No se pueder conectar con el servidor SQL");
	mysqli_select_db($conexion,$DB_DATABASE) or die ("ERROR: No se pueder abrir la base de datos");
	echo mysqli_error($conexion);

	mysqli_query($conexion,$query);
	if(mysqli_error($conexion)){
		echo mysqli_error($conexion);
	}
	else{
		echo "<br>Registro dado de alta<br>";
	}
}
?>