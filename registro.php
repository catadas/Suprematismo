<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);


	if($_POST['newsletter']===""){
		$news="no";
	}else{
		$news="si";
	}


	include("conexion.php");

	// Me da error     $consulta=mysql_query("INSERT INTO usuarios(nombre,apellido,email,usuario,password) VALUES('$nombre','$apellido','$email','$usuario','$password')",$conexion);

	$consulta = mysqli_query($db, "INSERT INTO usuarios (nombre, apellido, email, usuario, password, newsletter) VALUES ('$nombre','$apellido','$email', '$usuario', '$password', '$news')");


	header("Location:form_login.php");

?>	
    

</body>
</html>