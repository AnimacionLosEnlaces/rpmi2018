<?php
//Datos de configuracion
include('include/config.php');

//Funciones php (similar a una librería javascript)
include('include/funciones.php');


// Creamos la conexión que servirá a lo largo de la página
$conn = mysqli_connect($servername, $username, $password,$dbname);
//Configuramos la configuración de caracteres
mysqli_set_charset($conn, "utf8");

// Si hay un problema en la conexión, paramos y lanzamos un mensaje de error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mi Biblioteca</title>
</head>

<body>
<h1>Listado de libros</h1>

<form action="" method="get" id="myForm">

<select name="id_cat" id="id_cat">
	<option value="">Elige una categoría</option>
    <option value="id">Nombre de la categoría</option>
	<option value="id">Nombre de la categoría</option>

</select>

<hr>

<?php

//Vamos a seleccionar los libros, ordenados por su título

//Creamos la consulta y le ejecutamos, guardando el resultado en la variable $result
$sql = "SELECT * FROM `libros` ORDER BY `libros`.`titulo` DESC";
$result = mysqli_query($conn, $sql);

//Bucle con los resultados. Una vuelta por cada registro
//En cada vuelta tenemos un array $row con los campos de la BD
while($row = mysqli_fetch_assoc($result)) {
	
	//La tabla de libros nos ha devuelto el ID del autor
	//Ahora necesitamos sus datos. Lo consultamos a la base de datos
	$sql_autor = "SELECT * FROM autores WHERE id_autor = " . $row['id_autor'] . " LIMIT 1";
	
	//Si queremos ver la consulta, podemos mostrarla en pantalla
	//echo $sql_autor
	
	//Ejecutamos la consulta $sql_autor, y obtenemos el resultado en $result_autor
	$result_autor = mysqli_query($conn, $sql_autor);
	
	//Si la consulta ha devuelto algún registro:
	if (mysqli_num_rows($result_autor) > 0) {
		//Metemos los datos del registro devuelto en un array $autor
		$autor = mysqli_fetch_assoc($result_autor);
		//Construimos el nombre concatenando campos nombre y apellido
		$nombre_autor = $autor['nombre'] . " " . $autor['apellidos'];
	}
	else
	{
		//Si no hay regitros, el nombre del autor es este:
		$nombre_autor = "Desonocido";
	}
	
	
	//Por cada registro devuelto mostramos este texto que incluye el título y el nombre del autor construido previamente
	echo '<p>' . $row['titulo'] . ' (' . $nombre_autor . ')</p>';
	
}


?>


</body>
</html>











