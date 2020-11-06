<?php

	include("conexion.php");

	if(isset($_POST['register'])){
		if (strlen($_POST['nombre']) >=1 && strlen($_POST['apellido']) >=1 &&
		strlen($_POST['mail']) >=1 && strlen($_POST['contrasena']) >=1)
		{
			$nombre=trim($_POST["nombre"]);
			$apellido=trim($_POST["apellido"]);	
			$mail=($_POST["mail"]);
			$contrasena=$_POST["contrasena"];
			$insert="INSERT INTO Usuarios(idUsuario,nombre,apellido,mail,contrasena) VALUES (NULL,\"$nombre\",\"$apellido\",\"$mail\",\"contrasena\")";
			conectar_bd($insert);
		}	
	}		
	
?>