<?php

//Compruebo si el usuario está logeado (si existe la variable de sesión que creo al logear)

//Primero iniciamos las varoables de sesión
session_start();
//Si no existe, lo redirijo a la página de logeo
if(!isset($_SESSION["codigoProfesor"]))
{
	//Redirijo al usuario a la página de logeo
	header('Location: login.php');
	die();
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Página de inicio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!-- jQuery library -->
<script src="js/jquery-3.2.1.min.js"></script>

<!-- Popper JS -->
<script src="js/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>


</head>

<body onLoad="init()">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12"> 
      <nav class="navbar navbar-expand-lg navbar-dark bg-info">
		  <a class="navbar-brand" href="#">
			<img src="img/logo_color.svg" height="30" class="d-inline-block align-top" alt="logo">
			
		  </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item ">
			  <a class="nav-link active" href="#">Inicio </a>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="#">Prestar <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Devolver</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Panel</a>
			</li>
		  </ul>
		  <form class="form-inline">
			  <img src="img/profesor_bergstrom.jpg"	class="d-inline-block align-top pr-2 rounded-circle" height="40" alt="logo">
			  
			<a href="logout.php" class="btn btn-outline-light my-2 my-sm-0">Logout</a>
		  </form>
		</div>
	  </nav>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
		
			<h1>Página de inicio</h1>
			<hr>
			
		</div>
	
	</div>
</body>
</html>