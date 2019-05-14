<?php
//Página que solo sirve para borrar la sesión del usuario (deslogearlo) y redirigirle a login.php
session_start();
//Borramos la variable de sesión
unset($_SESSION["codigoProfesor"]);
//Redirijo al usuario a la página de logeo
header('Location: login.php');
die();

?>