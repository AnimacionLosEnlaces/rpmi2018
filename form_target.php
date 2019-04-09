<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recibir formulario</title>
</head>

<body>
<h1>Recibiendo el formulario</h1>
<hr>

<h2>
Hola 
<?php

echo $_POST['apellidos'];


?>
</h2>

<a href="formularios.php">Volver</a>


<pre>

<?php print_r($_POST); ?>

</pre>

<script>

var nombre = '<?php echo $_POST['apellidos'] ?>';

console.log(nombre);


</script>









</body>
</html>