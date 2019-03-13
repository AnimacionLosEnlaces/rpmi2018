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


</head>

<body onLoad="init()">
<div class="container-fluid">

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
                    
                    <img src="images/dummy/400x400_pink.png" alt="video1" class="img-fluid" onClick="cargarVideo('Título del vídeo 1','poster1.png','video01.mp4')">
                    </div>
                    
                    <!--Texto-->
                    <div class="col-lg-8 col-md-12">
                    	<h5>The beauty of the witcher</h5>
                        
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
                    
                    <img src="images/dummy/400x400_pink.png" alt="video1" class="img-fluid" onClick="cargarVideo('Título del vídeo 2','poster2.png','video02.mp4')">
                    </div>
                    
                    <!--Texto-->
                    <div class="col-lg-8 col-md-12">
                    	<h5>A night to remember</h5>
                        
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

function cargarVideo(texto,poster,video){
	//console.log("El título es: \"" + texto + "\"");
	document.getElementById('titulo').innerHTML = texto;	
	var videoURL = "vids/witcher/" + video;
	//console.log(videoURL);
	
	document.getElementById('player').src = videoURL;
}

</script>

</body>
</html>
