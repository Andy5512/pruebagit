<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
</head>
<body class="cuerpo">
	<?php 
	include_once "cabezera.php";
	?>
	<h1 class="h1">Bienvenidos a la panaderia Panaderia PonKey</h1>
	<center><div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../img/pan/pan.jpg" class="d-block carusel">
    </div>
    <div class="carousel-item">
      <img src="../../img/pasteles/pastel.jpg" class="d-block carusel">
    </div>
    <div class="carousel-item">
      <img src="../../img/pan/pan0.jpg" class="d-block carusel">
    </div>
    <div class="carousel-item">
      <img src="../../img/pasteles/pastel1.jpg" class="d-block carusel">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></center>
	<div class="container py-3 my-3 bg-secondary">
        <div class="row">
            <div class="col">
                <p class="p">Nuestra Panaderia les ofrece una variadead de panes, que usted puede escoger
				desde cualquier tipo de pan, tenemos de diferentes tamaños, modelos, precios, somos una de las mejores panderias ya que tenemos panes de todo tipo. 
				</p>
            </div>
            <div class="col">
                <p class="p">Nuestra Panaderia les ofrece una variadead pasteles, que usted puede escoger
				desde cualquier tipo de pasteles, tenemos de distintos tamaños, modelos, precios, colores, somos una de las mejores panderias ya que tenemos pastele de todo tipo. </p>
            </div>
        </div>
        <center><div>
      		<img src="../../img/pan/pan.jpg" class="d-block carusel">
    	</div></center>
        <div class="container py-5 my-5">
       		<p class="p">Te felicitamos por formar parte de esta gran familia y nos ponemos a tu disposición para brindarte el mejor servicio, <br> la mejor calidad y sobre todo seguridad para que vivas el Pasion de Locos por el Pan en conjunto con tu familia.</p>
   		</div>
   		<center><div>
      		<img src="../../img/pasteles/pastel.jpg" class="d-block carusel">
    	</div></center>
   		<div class="container py-5 my-5">
    		<p class="p">Te acompañamos dentro de esta nueva experiencia y recuerda que solo en esta pagina 
    		<br>
    		web vas a poder encontrar los mejores panes y pasteles.</p>
   		</div>
	</div>
</body>
	<?php 
	include_once "footer.php";
	?>
</body>
</html>