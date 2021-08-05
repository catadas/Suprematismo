<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<meta charset="utf-8">
	<title> Bienvenido! | Dasso Catalina</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<main>
	<header id="headerinternas">
		<a href="index.html" target="_blank"> <img src="img/logo.png" class="logo"></a>
		<button class="btnlupa"><a href="form_login.php"> <img src="img/sesion.png"> </a></button>
		<button class="btnlupa"><a href="buscador.html"> <img src="img/lupa.png"> </a></button>
		
		<nav><div >
<div class="bajainterna">
	  <button class="btnhistoriainterna"><a href="historia.html" target="_blank"> <img src="img/historiainterna.png"></a></button>

		  <div class="baja-filointerna">
			<a id="btnfilointerna" href="filosofia.html" target="_blank">Filosofía</a>
		  </div>
		</div>
	
	
	<button class="btnhistoriainterna"><a href="artistas.html" target="_blank"> <img src="img/artistasinterna.png"> </a></button>
	<button class="btnhistoriainterna"><a href="obras.html" target="_blank"> <img src="img/obrasinterna.png"> </a></button>
	<button class="btnhistoriainterna"><a href="contacto.html" > <img src="img/contactointerna.png"> </a></button>
	</div>
	</nav>
	

<div class="contenedor">	
		<div class="bienvenidook">

		<?php

		if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
		echo " <br><br>   ";	
		echo "Hola ";
		echo $_SESSION['nombre']." ";
		echo $_SESSION['apellido'].", ";
		echo "ahora vas a poder acceder a los contenidos exclusivos de los usuarios registrados!";
		echo "<p><img src='img/imgbienv.png' /></p>";
		echo "<a href='salir.php'>Cerrar sesion</a>";


		}else{
			echo "Solo usuarios registrados...";
		//	include("form_registro.php");
			include("form_login.php");
		}
		?>

		</div> 
</div>
		
	<footer>
		<div class="izquierdapie"> <strong><p>© Copyright 2021 - Dasso Catalina </p></strong></div>
		<div id="derecha"> 
			<a href="https://www.instagram.com/explore/tags/suprematism/?hl=es" target="_blank"> <img src="img/ig.png" class="ig"></a>
			
			<a href="https://www.pinterest.ca/search/pins/?q=suprematism&rs=typed&term_meta[]=suprematism%7Ctyped"> <img src="img/pin.png" class="pin"></a>
			
			<a href="https://www.youtube.com/watch?v=tlotnn1kdbw" target="_blank"><img src="img/yt.png" class="yt"></a></div>
		
	</footer>
	</body>
</html>