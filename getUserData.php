<?php
//Datos de configuracion
include_once('include/config.php');


//Funciones php (similar a una librería javascript)
include('include/funciones.php');


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Obtener datos de usuario mediante función</title>
</head>

<body>


<?php

if(isset($_GET['id']))
{

	$id = $_GET['id'];
}
else
{
	$id = 0;
}
$array_data = getUserData($id);


?>


<?php if(count($array_data) != 0) : ?>



<h4><?php echo $array_data['nombre'] ?></h4>
<img src="images/fotos/<?php echo $array_data['foto'] ?>">



<?php else : ?>




<h3>No se han obtenido datos del usuario</h3>



<?php endif ?>






</body>
</html>