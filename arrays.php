<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrays</title>
</head>

<body>
<pre>

<?php

$ciudades = [];

$ciudades['Brasil'] = 'Sao Paulo';

$ciudades['Venezuela'] = 'Caracas';

$ciudades['Argentina'] = 'La Plata';

print_r($ciudades);


?>
</pre>




<h1>

<?php  

foreach($ciudades AS $key => $value)
{
	
	echo "La ciudad de " . $value . " se encuentra en " . $key . "</br>";
	
}

//$n = rand(0,3);
//echo $ciudades[$n];   

?>


</h1>

<h2>
<?= $ciudades['Brasil'] ?>

</h2>




<hr>

<h1>Array multidimensional</h1>


<?php

$productos = array(
		2 => array(
			'nombre' => 'Cámara',
			'precio' => 258,
			'descr' => 'Pa sacar afotos',
			'imagen' => 'camara.png'
		),
		4 => array(
			'nombre' => 'Trípode',
			'precio' => 125,
			'descr' => 'Pa sujetar la cámara',
			'imagen' => 'tripode.png'
		)
	);

print_r($productos);
?>
<h2>
<?php 

//Cambio el índice del array mediante una variable y cambian los datos

$n = 2;
echo 'El producto ' . $productos[$n]['nombre'] . ' tiene un precio de ' . $productos[$n]['precio'] . '€<br>'; 

$n = 4;
echo 'El producto ' . $productos[$n]['nombre'] . ' tiene un precio de ' . $productos[$n]['precio'] . '€<br>'; 
?>
</h2>




</body>
</html>








