<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Registrate! | Dasso Catalina</title>
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
		
	<div class="sesion"><div class="cajasesion">
	<h2 class="titsesion">Registrate en el sitio!</h2>
    <form action="registro.php" method="post" >
    	<label>Nombre
        	<input id="nombrer" type="text" name="nombre" required />
        </label><br />
		<label>Apellido
        	<input id="apellidor" type="text" name="apellido" required />
        </label><br />
        <label>Email
        	<input id="emailr" type="email" name="emailr" required />
        </label><br />
        <label>Nombre de usuario
        	<input class="usuarior" name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
        	<input class="passr" type="password" name="password" maxlength="12" />
        </label><br />
        	<label>
            <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
            </label><br />
            <input class="btnregis" type="submit" value="Registrarse"/>	
    </form>
			</div>
		<div class="cajafotor">
			<img id="imgco" src="img/imgregis.png">
		</div>
		</div>	
	<footer>
		<div class="izquierdapie"> <strong><p>© Copyright 2021 - Dasso Catalina </p></strong></div>
		<div id="derecha"> 
			<a href="https://www.instagram.com/explore/tags/suprematism/?hl=es" target="_blank"> <img src="img/ig.png" class="ig"></a>
			
			<a href="https://www.pinterest.ca/search/pins/?q=suprematism&rs=typed&term_meta[]=suprematism%7Ctyped"> <img src="img/pin.png" class="pin"></a>
			
			<a href="https://www.youtube.com/watch?v=tlotnn1kdbw" target="_blank"><img src="img/yt.png" class="yt"></a></div>
		
	</footer>
</main>
</body>
</html>