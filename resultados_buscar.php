<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title> Buscá algo en el sitio! | Dasso Catalina</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<header id="headerinternas">
		<a href="index.html" target="_blank"> <img src="img/logo.png" class="logo"></a>
		<button class="btnlupa"><a href="form_login.php"> <img src="img/sesion.png"> </a></button>
		<button class="btnlupa"><a href="buscador.html"> <img src="img/lupa.png"> </a></button>
		<nav><div >
<div class="bajainterna">
	  <button class="btnhistoriainterna"><a href="historia.html" > <img src="img/historiainterna.png"></a></button>

		  <div class="baja-filointerna">
			<a id="btnfilointerna" href="filosofia.html" target="_blank">Filosofía</a>
		  </div>
		</div>
	
	
	<button class="btnhistoriainterna"><a href="artistas.html" target="_blank"> <img src="img/artistasinterna.png"> </a></button>
	<button class="btnhistoriainterna"><a href="obras.html" target="_blank"> <img src="img/obrasinterna.png"> </a></button>
	<button class="btnhistoriainterna"><a href="contacto.html" > <img src="img/contactointerna.png"> </a></button>
	</div>
	</nav>
	
	</header>


	
 <section class="resulbuscar">
	<div class="contenedor"> <div id="resuls">
	<?php

	$buscar=$_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	@$conexion=mysqli_connect("localhost","root","", "pd3") or die ("No se realizó la conexión al servidor");

	$consulta=mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
	?>
	<article style="width:60%;margin:0 auto;border:solid;padding:10px">
		<p>Cantidad de Resultados: 
		<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
		?></p>

		<?php
	while($resultados=mysqli_fetch_array($consulta)) {

		?>
		<p>
		<?php	
		echo $resultados['nombre']." ";
		echo $resultados['apellido'];
		echo $resultados['bio'];

		?>
		</p>

		<img src="<?php echo $resultados['foto']; ?>">

		<hr/>
		<?php
	}

	mysqli_free_result($consulta);
	mysqli_close($conexion);


	?>
	</article></div></div>
	</section>
	

	
	
	<footer>

		<div class="izquierdapie"> <strong><p>© Copyright 2021 - Dasso Catalina </p></strong></div>
		<div id="derecha"> 
			<a href="https://www.instagram.com/explore/tags/suprematism/?hl=es" target="_blank"> <img src="img/ig.png" class="ig"></a>
			
			<a href="https://www.pinterest.ca/search/pins/?q=suprematism&rs=typed&term_meta[]=suprematism%7Ctyped"> <img src="img/pin.png" class="pin"></a>
			
			<a href="https://www.youtube.com/watch?v=tlotnn1kdbw" target="_blank"><img src="img/yt.png" class="yt"></a></div>
		
	</footer>

</body>
</html>