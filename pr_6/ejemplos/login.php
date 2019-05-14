<?php
//Incluimos los datos y las funciones
include('include/config.php');
include('include/functions.php');

//Compruebo si el usuario está logeado (si existe la variable de sesión que creo al logear)

//Primero iniciamos las variables de sesión
session_start();
//Si existe (está logeado), no tiene sentido que quiera logearse
if(isset($_SESSION["codigoProfesor"]))
{
	//Redirijo al usuario a la página de inicio
	header('Location: index.php');
	die();
}


//Declaramos la variable de error vacía
$error = "";
//Si se ha enviado el formulario (el botón de envío es un imput de nombre "comprobar")
if(isset($_POST['comprobar']))
{
	//Comprobamos si el código enviado es correcto en la base de datos
	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Error en la conexión: " . mysqli_connect_error());
	}
	
	//Creamos la consulta y la ejecutamos
	$sql = "SELECT * FROM usuarios WHERE codigo_de_barras = '" . $_POST['codigoProfesor'] . "' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	
	//Si hay resultados, creamos la variable de sesión y redirigimos la página
	if (mysqli_num_rows($result) > 0) {
		session_start();
		$_SESSION["codigoProfesor"] = $_POST['codigoProfesor'];
		//Redirigimos la página de inicio
		header('Location: index.php');
	} else {
		//Si no hay resultado mostramos el error
		$error = 'Código de usuario incorrecto';
	}
	
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
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
			  <a class="nav-link" href="#">Inicio </a>
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
			  
			<a href="login.php" class="btn btn-outline-light my-2 my-sm-0">Login</a>
		  </form>
		</div>
	  </nav>
    </div>
  </div>
</div>
<div class="container">
	<div class="row">
		<h2>LOG IN</h2>
		<hr>
		<div class="col-md-12">
		
			<form action="login.php" method="post" id="loginForm">
			  <div class="form-group">
				<label for="codigoProfesor">Código</label>
				<input type="text" class="form-control" id="codigoProfesor" name="codigoProfesor" placeholder="tu código">
				<small id="codeHelp" class="form-text text-muted">Escanear el código del profesor.</small>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Contraseña</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
				  <small id="exampleInputPassword1" class="form-text text-muted">Si no tienes a mano tu código, escribe la contraseña.</small>
			  </div>
				<?php if($error != '') : ?>
				<div class="alert alert-danger" role="alert">
				  <strong>Error:</strong> <?= $error ?>
				</div>
				<?php endif ?>
			  <button type="submit" name="comprobar" value="si" class="btn btn-primary">Validar</button>
			</form>


		</div>
	</div>
	
</div>	
	
	
	
	</div>
</body>
</html>