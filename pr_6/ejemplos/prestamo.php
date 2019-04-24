<?php
//Función que comprueba si está definido el nombre o el código del alumno
//También comprueba que no esté vacío
if(isset($_GET['alumno_name']) && $_GET['alumno_name'] != '')
{
	
	$nombre_alumno = $_GET['alumno_name'];
	$display_image = 'block';
}
else if(isset($_GET['alumno_code']) && $_GET['alumno_code'] != '')
{
	$nombre_alumno = $_GET['alumno_code'];
	$display_image = 'block';
}
else
{
	$nombre_alumno = '';
	$display_image = 'none';
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo de trabajo en equipo</title>
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
			<li class="nav-item active">
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
			  
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
		  </form>
		</div>
	  </nav>
    </div>
  </div>
  <div class="row pt-2">
    <div class="col-12 text-center">
      <h3>Préstamo de material</h3>
    </div>
  </div>
  <hr>
  <form action="prestamo.php" id="formAlumno" method="get">
    <div class="row"> 
      <!--Columna con el formulario-->
      <div class="col-12 col-md-8 pb-2">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="alumno_code" id="input_code" maxlength="10" placeholder="Código del alumno">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" name="alumno_name" id="input_name" placeholder="Nombre del alumno">
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-12 text-center">
            <button type="button" class="btn btn-info" data-dismiss="modal" id="btn_validar"> <span class="glyphicon glyphicon-ok"></span>Validar</button> <button href="prestamo.php" type="button" class="btn btn-warning" id="btn_volver">Volver</button>
          </div>
        </div>
      </div>
      <!--Fin formulario--> 
      
      <!--Datos del alumno-->
      <div class="col-12 col-md-4 bg-light p-2">
        <div class="row">
          <div class="col-md-4 d-none d-md-block"> 
			  <img src="img/Martin_Prince.png" class="img-fluid" alt="Alumno" style="display:<?php echo $display_image ?>" id="foto_alumno"> 
		  </div>
          <div class="col-12 col-md-8 text-center">
            <h5 id="nombre_alumno"><?php echo $nombre_alumno ?></h5>
            <p id="ciclo_alumno"></p>
          </div>
        </div>
      </div>
    </div>
  </form>
  <hr>
  <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; Copyleft 2019</span>
      </div>
    </footer>
</div>

<!--Librerías personales-->
<script src="js/prestamo.js"></script>
</body>
</html>
