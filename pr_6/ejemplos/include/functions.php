<?php
//incluimos el archivo de configuración
//Para evitar duplicidades usamos "include_once"
include_once('config.php');
//IMPORTANTE: las variables contenidas en el archivo config no son globales, y por tanto no estarán disponibles en las funciones
//Para poder usar esas variables en una función deberemos llamara a las "superglobales" de PHP : $GLOBALS['nombre_de_la_variable']
//Más info en https://www.w3schools.com/php/php_superglobals.asp

//Función que nose devuelve la conexión a la base de datos
function connect()
{
	//Me conecto, usando las superglobales de PHP, obtenidas en el archivo config.php
	$conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
	
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//Configuramos la conexión para que use codificación de caracteres UTF8
	mysqli_set_charset($conn, "utf8");
	
	//Devolvemos la conexión creada
	return $conn;
}

//Función que devuelve los datos de un usuario a partir de su ID
function getUserDataById($id)
{
	//Declaro un array vacío, que será devuelto si no hay resultados
	$array = [];
	
	$conn = connect();
	mysqli_set_charset($conn, "utf8");
	
	//Construyo la consulta SQL usando el ID que me han pasado a la función
	$sql = "SELECT * FROM `usuarios` WHERE id_usuario = " . $id . " LIMIT 1";
	
	//Ejecuto la función
	$result = mysqli_query($conn, $sql);
	
	//Si hay resultados, los pongo en el array que hemos creado antes
	if (mysqli_num_rows($result) > 0) {
			
		$array = mysqli_fetch_assoc($result);
	}
	
	//Devuelvo los datos
	return $array;	
}
//Función que devuelve los datos de un usuario a partir de su código
function getUserDataByCode($code)
{
	//Declaro un array vacío, que será devuelto si no hay resultados
	$array = [];
	
	$conn = connect();
	mysqli_set_charset($conn, "utf8");
	
	//Construyo la consulta SQL usando el ID que me han pasado a la función
	$sql = "SELECT * FROM `usuarios` WHERE code = " . $code . " LIMIT 1";
	
	//Ejecuto la función
	$result = mysqli_query($conn, $sql);
	
	//Si hay resultados, los pongo en el array que hemos creado antes
	if (mysqli_num_rows($result) > 0) {
			
		$array = mysqli_fetch_assoc($result);
	}
	
	//Devuelvo los datos
	return $array;	
}
?>