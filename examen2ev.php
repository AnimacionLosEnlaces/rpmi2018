<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="images/favicon-24x24.png" />

<title>Examen 2ev</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bs/bootstrap.css">

<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Popper JS -->
<script src="js/popper.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bs/bootstrap.js"></script>

<style>
img {
	cursor:pointer;
}

.red {
	color: red;
}

.green {
	color: green;
}

</style>

</head>

<body onLoad="init()">
<div class="container-fluid">

<h1 id="tituloPrincipal" data-miTexto="Este texto es de prueba" class="red">Título de la página</h1>
<button onClick="jugar()">Click</button>

<!-- Cuerpo central-->
<div class="row">


	<!--Columna izquierda con el player-->
    <div class="col-lg-7 col-md-12">
		<h2 id="titulo">Título del vídeo</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <video id="player" poster="images/poster/poster1.png" controls src="vids/witcher/video01.mp4">
                
            </video>
        </div>

    
    
    </div>
    <!--Fin columna izquierda-->
    
    <!--Columna derecja con los vídeos-->
    <div class="col-lg-5 col-md-12">
    
    	<!--ITEMS-->
        <div class="row">
        
        	<!--Item-->
            <div class="col-lg-12 col-md-3 col-sm-12">
            	
                
                <div class="row">
                
                	<!--Imagen-->
                    <div class="col-lg-4 col-md-12 d-md-block d-sm-none">
                    
                    <img src="images/dummy/400x400_pink.png" alt="video1" class="img-fluid" onClick="cargarVideo(1)">
                    </div>
                    
                    <!--Texto-->
                    <div class="col-lg-8 col-md-12">
                    	<h5 id="tituloVideo1">The beauty of the witcher</h5>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aspernatur iure autem natus rerum! Officia, optio, quae eveniet temporibus officiis.</p>
                    </div>
                
                
                </div>
            
            
            </div>
            <!--Fin item-->
            
            
            
            <!--Item-->
            <div class="col-lg-12 col-md-3 col-sm-12">
            	
                
                <div class="row">
                
                	<!--Imagen-->
                    <div class="col-lg-4 col-md-12 d-md-block d-sm-none">
                    
                    <img src="images/dummy/400x400_pink.png" alt="video1" class="img-fluid" onClick="cargarVideo(2)">
                    </div>
                    
                    <!--Texto-->
                    <div class="col-lg-8 col-md-12">
                    	<h5 id="tituloVideo2">A night to remember</h5>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aspernatur iure autem natus rerum! Officia, optio, quae eveniet temporibus officiis.</p>
                    </div>
                
                
                </div>
            
            
            </div>
            <!--Fin item-->
        
        
        
        
        
        
        </div>
        
        <!--Item-->
        
        
        <!--fin item-->
	
    
    
    
    
    </div>
    <!--Fin columna derecha-->


</div>
<!--Fin cuerpo central-->

	
    


</div>



<script>

function init(){
	console.log('Se ha cargado la página');	
}

function jugar(){
	
	var DOM_titulo = document.getElementById('tituloPrincipal');
	var estilo =  DOM_titulo.getAttribute("class");
	console.log(estilo);
	
	if(estilo == 'red')
	{
		DOM_titulo.setAttribute("class","green");
	}
	else 
	{
		DOM_titulo.setAttribute("class","red");
	}
	
	//Saco a consola su atributo data
	console.log(DOM_titulo.getAttribute("data-miTexto"));
}

function cargarVideo(id_video){
	//Creo la cadena de texto con la URL de los vídeos y los posters
	var videoURL = "vids/witcher/video" + id_video + ".mp4";
	var posterURL = "images/poster/poster" + id_video + ".png";
	//Compruebno que son correctos en la consola
	console.log(videoURL);
	console.log(posterURL);
	
	//Pongo el vídeo y el póster
	document.getElementById('player').src = videoURL;
	document.getElementById('player').poster = posterURL;
	
	
	//Cambio el título
	var texto = document.getElementById("tituloVideo" + id_video).innerHTML;
	document.getElementById('titulo').innerHTML = texto;	
}

</script>

</body>
</html>
