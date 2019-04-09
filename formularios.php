<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>
</head>

<body>
<h1><?php echo 'Hola mundo' ?></h1>
<hr>
<h2>Formularios HTML</h2>

<form id="myForm" name="myForm" action="form_target.php" method="post">
	
    <p><label for="raza">Apellidos</label><br>
	<input type="text" name="apellidos" id="apellidos" value="" placeholder="Escribe tus apellidos">
    
    <input type="password" name="pass"></p>
   
    <p><input type="checkbox" name="acepto" id="acepto" checked>
    	<label for="acepto">Acepto las condiciones</label></p>
    
    
    <p><input type="radio" name="raza" value="humano" id="raza1" checked> <label for="raza1">Humano</label> | <input type="radio" name="raza"  value="elfo"> Elfo | <input type="radio" name="raza"  value="orco"> Orco  </p>
    

    <input type="submit" name="boton" value="Enviar">


</form>


</body>
</html>