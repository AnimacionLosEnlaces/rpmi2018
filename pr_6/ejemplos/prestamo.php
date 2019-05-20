<?php
//Incluimos los datos y las funciones
include('include/config.php');
include('include/functions.php');

//Por defecto, dejamos la imagen y los datos del alumno en blanco
//Como no se ha pasado el formulario, el nombre y la imagen la dejamos en blanco
$nombre_alumno = '';
$tel_alumno = '';
$codigo_alumno = '';
$image = '';
$display_image = 'none';

//Por defecto no hay errores
$error = '';

//Función que comprueba si está definido el nombre o el código del alumno
//También comprueba que no esté vacío
if(isset($_GET['alumno_name']) && $_GET['alumno_name'] != '')
{
	
	//El valor pasado mediante el select es el ID del alumno
	//Mediante la función creada para ello obtenemos sus datos
	$datos = getUserDataById($_GET['alumno_name']);
	//Si no ha devuelto un array vacío
	if(count($datos) > 0) 
	{
		//Declaramos el nombre del alumno a partir del array obtenido
		$nombre_alumno = $datos['nombre'] . ' ' . $datos['apellidos'];
		$tel_alumno = $datos['phone'];
		$codigo_alumno = $datos['code'];
		//La imagen está en base 64, así que tenemos que convertirla
		$image = '<img src="img/' . $datos['foto'] . '" class="img-fluid" alt="Alumno"  id="foto_alumno"/>';
	}
	else
	{
		$error = "No se ha encontrado un usuario con ese nombre";
	}
	

}
else if(isset($_GET['alumno_code']) && $_GET['alumno_code'] != '')
{
	$datos = getUserDataByCode($_GET['alumno_code']);
	if(count($datos) > 0) 
	{
		
		$nombre_alumno = $datos['nombre'] . ' ' . $datos['apellidos'];
		$tel_alumno = $datos['phone'];
		$codigo_alumno = $datos['code'];
		$image = '<img src="img/' . $datos['foto'] . '" class="img-fluid" alt="Alumno"  id="foto_alumno" />';
	}
	else
	{
		$error = "No se ha encontrado un usuario con ese código";
	}

}


?>


<?php
//En lugar de poner el header o el menú, creamos un snippet y lo incluimos mediante include
//Esto nos permite aligerar de código y compartir líneas en todas las páginas del site
include('include/snippets/header.php');
?>

<body onLoad="init()">
<div class="container-fluid">
<?php
include('include/snippets/menu.php');
?>
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
          <div class="col-12 col-md-4">
            <div class="form-group">
              <input type="text" class="form-control" name="alumno_code" id="input_code" maxlength="10" placeholder="Código del alumno">
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="form-group">
			  	<select class="custom-select" name="alumno_name" id="input_name">
			  		<option value="">ó selecciona el alumno que recogerá el material</option>
					<?php
					//Creamos la consulta para seleccionar todos los alumnos, incluidos profesores
					$conn = connect();
					$sql = "SELECT id_usuario, nombre, apellidos FROM usuarios ORDER BY apellidos";
					$result = mysqli_query($conn, $sql);
					//Si hay resultados, creamos el bucle que mostrarás las opciones del select
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value=" . $row["id_usuario"]. ">" . $row["apellidos"]. ", " . $row["nombre"]. "</option>";
						}
					}
					?>
				</select>	
            </div>
          </div>
        </div>
        <div class="row ">
			<?php if($error != '') : ?>
			<div class="col-12 text-center">
				<div  class="alert alert-danger" role="alert">
			  	<?= $error ?>
				</div>
			</div>
			<?php endif ?>
          <div class="col-12 text-center">
            <button type="button" class="btn btn-info" data-dismiss="modal" id="btn_validar"> <span class="glyphicon glyphicon-ok"></span>Validar</button> <a href="prestamo.php" type="button" class="btn btn-warning" id="btn_volver">Volver</a>
          </div>
        </div>
      </div>
      <!--Fin formulario--> 
      
      <!--Datos del alumno-->
      <div class="col-12 col-md-4 bg-light p-2">
        <div class="row">
          <div class="col-md-4 d-none d-md-block"> 
			  <?php echo $image ?>
		  </div>
          <div class="col-12 col-md-8 text-center">
            <h5 id="nombre_alumno"><?php echo $nombre_alumno ?></h5>
			<p>Teléfono: <?= $tel_alumno ?></p>
			<p>Código: <?= $codigo_alumno ?></p>
          </div>
        </div>
      </div>
    </div>
  </form>
  <hr>
<?php
include('include/snippets/footer.php');
?>
  
</div>

<!--Librerías personales-->
<script src="js/prestamo.js"></script>
</body>
</html>
