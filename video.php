<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/favicon-24x24.png" />
<title>Vídeo</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bs/bootstrap.css">

<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Popper JS -->
<script src="js/popper.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bs/bootstrap.js"></script>
</head>

<style>

#header {
	width: 100%;
	height: 80px;
	background-color:#97090B;
}

</style>

<body onLoad="inicio()">
<div class="container">
	
	<!--Encabezado-->
    <div class="row" id="header">
        <div class="col-12">
        	<h1>Vídeos</h1>
    	</div>
    </div>
    
    <!-- Menú-->
    
    <div class="row">
    	<div class="col-12">
        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
        
        </div>
    </div>
    <!--Breadcrumb-->
    <div class="row">
		<div class="col-12 p-0">
        
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>
        </div>

    </div>
    
    <!--Contenido-->
    <div class="row">
    
    
    	<?php for($n=0;$n<8;$n++) : ?>
    	<!--Video item-->
        <div class="col-sm-12 col-md-6 col-lg-3">
        	<div class="row">
            	<div class="col-sm-12 col-md-8">
                
                
                    <div class="embed-responsive embed-responsive-4by3">
                        <video poster="img/poster/tim1.jpg">
                            <source src="vids/video01.mp4"  type="video/mp4">
                            <source src="vids/video01.ogv"  type="video/ogg"->
                            
                            Your browser does not support the video tag.
                        </video>
                    </div>
        
                </div>
                
                <div class="col-sm-12 col-md-4">
                	<h5>Título del vídeo</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                
                </div>
            
            
            </div>
        
        
        
        </div>
        
        <!--Fin video item-->
    	<?php endfor ?>
    
    
    
    
    
    
    </div>
    
    <!--Pie-->
    <div class="row">
    
    </div>

</div>
<script>
function inicio() {
	document.getElementById('search').focus();
}


</script>


</body>
</html>
