<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Estructuras de control</title>
</head>

<body>
<h1>Operadores aritméticos y de control</h1>
<?php


$var1 = 10;
$var2 = 10;

$resultado = $var1 + $var2;

if($resultado == 30)
{
		$msg = "Es igual 30<br>";
}

if(isset($msg))
{
	echo $msg;
}


echo "El resultado es: " . $resultado;



?>

<hr>
<h1>Bucles (while / for)</h1>


<?php

//Suma
$n = 1;

//Contador de ciclos.
while($n <= 10)
{
	
	echo "N vale" . $n . "<br>";
	$n++;
	
}
echo '<hr>';
//Obtengo el año actual mediante php
$anio = date('Y');

//Bucle mediante for, con 3 parámetros: declaración inicial, condición que tiene que darse en cada vuelta, acción a realizar en cada vuelta
//Mostrará todos los años desde 1980 hasta el año actual
for($y=1980;$y<=$anio;$y++)
{
	echo "Año: " . $y . "<br>";
}



?>


<h1>Bucles con arrays</h1>

<?php

//Creo el array
$foo = ['platano','manzana','fresa'];
//print_r($foo);

//Por cada elemento del array muestro su valor
foreach($foo AS $value)
{
	echo $value . "<br>";	
}
echo '<hr>';
//Ahora haré lo mismo pero con un array con claves personalizadas

$foo2 = array(
	'clave1' => 'Valor 1',
	'clave2' => 'Valor 2',
	'clave3' => 'Valor 3',
	
);

//Por cada elemento del array me devuelve su clave (en la variable $key) y su valor ($value)
foreach($foo2 AS $key => $value)
{
	
	echo "Clave: " . $key . " - valor: " . $value . "<br>";
}








?>














</body>
</html>