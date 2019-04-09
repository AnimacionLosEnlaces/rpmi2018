<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>


<style>

textarea {
	width: 100%;
	height: 80px;
}

</style>
</head>

<body>
<h1><?php echo 'Hola mundo' ?></h1>
<hr>
<h2>Formularios HTML</h2>
<form id="myForm" name="myForm" action="form_target.php" method="post">
  <p>
    <label for="raza">Apellidos</label>
    <br>
    <input type="text" name="apellidos" id="apellidos" value="" placeholder="Escribe tus apellidos">
    <input type="password" name="pass" id="pass">
    <span id="aviso_pass" style="display:none">Debe tener al menos 8 caracteres</span>
  </p>
  <p>
    <input type="checkbox" name="acepto" id="acepto" checked>
    <label for="acepto">Acepto las condiciones</label>
  </p>
  <p>
    <input type="radio" name="raza" value="humano" id="raza1" checked>
    <label for="raza1">Humano</label>
    |
    <input type="radio" name="raza"  value="elfo">
    Elfo |
    <input type="radio" name="raza"  value="orco">
    Orco </p>
    
    <p>
    	<select name="country" id="country">
        	<option value="">Elige tu país</option>
        	<option value="es" >España</option>
            <option value="en">Reino Unido</option>
            <option value="fr">Francia</option>
        </select>
    </p>
    
    <p>
    Comentarios<br>
    <textarea name="commments" id="comments"></textarea>
    </p>
  
  <input type="hidden" name="id_usuario" value="134">  
  <input type="hidden" name="time" value="<?php echo time() ?>"> 
  <input type="button" name="boton" value="Enviar" id="boton">
</form>



<script>

//Variables DOM
var DOM_form = document.getElementById('myForm');
var DOM_btn = document.getElementById('boton');
var DOM_apellidos = document.getElementById('apellidos');
var DOM_pass = document.getElementById('pass');


window.onload = function() {
  DOM_apellidos.focus();
};

//Listener que se lanza cada vez que se escribe algo en el campo de contraseña
DOM_pass.addEventListener('keyup',function(){
	var password = DOM_pass.value;
	
	//Obtengo el n1 de caracteres que tiene la contraseña
	var n = password.length;
	
	console.log(n);
	if(n < 8)
	{
		document.getElementById('aviso_pass').style.display = 'block';
		//alert('Debe tener mínimo 8 caracteres');	
	}
	else
	{
		document.getElementById('aviso_pass').style.display = 'none';
	}
	
});

//Listener para cuando cambia el valor de la caja de texto
DOM_apellidos.addEventListener('change', function() {
	var nombre = DOM_apellidos.value;
	
	console.log('ha cambiado. Valor: ' + nombre);
});


//Listener al hacer click sobre el botón de enviar
DOM_btn.addEventListener('click',function()
{
		
	
	var nombre = DOM_apellidos.value;
	console.log(nombre);
	//Trimeo el texto y compruebo que no está vacio
	if(nombre.trim() != "")
	{
		DOM_form.submit();
	}
	else
	{
		alert('Debes completar todos los campos');
	}
	
});

</script>
</body>
</html>












