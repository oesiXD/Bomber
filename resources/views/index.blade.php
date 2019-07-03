<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Tercera Compañia de Bomberos de Chillán</title>
	<link href="sitioWeb/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link href="sitioWeb/css/style.css" rel="stylesheet">
	<link href="sitioWeb/css/stylefooter.css" rel="stylesheet">
</head>
<style >


.pd-parallax{

	position: relative;
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 400px;
	margin: 0;
	padding: 0;
 }


 .time-api{
   margin-top: 1vh;
   padding: 10px;
   background: #0b3955;
   border-radius: 2%;
   text-align: center;
 }
 .breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: .25rem;
    margin-top: 1%;
}



</style>
<body style=" background-color: lightblue;">

	<!--- Navigation -->
	<nav id="menu" class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
		<div class="container-fluid">
				<a href="{{ url('/inicio') }}">
						<span  >
								<img src="/sitioWeb/images/log.png" href="{{ url('/inicio') }}"  alt="responsive image" width="260px" height="80px">
						</span>
					</a>
			<a class="navbar-brand"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/historia') }}">Historia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/noticias') }}">Noticias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/galerias') }}">Galerias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/postulacion') }}">Formulario</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<!--- End Navigation -->

	<!--- Image Slider -->

<div class="container-inicio">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>


	<div class="carousel-inner">

		<div class="carousel-item active" style="height: 80vh">
			<img class="d-block w-100" src="sitioWeb/images/imagen-b3.jpg" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>Conócenos</h5>
				<p>El cuerpo de bomberos de Chillán ha estado al servicio de la comunidad por mas de 100 años, por ende hay mucho por conocer de nosotros. Te invitamos a saber sobre nuestra historia.</p>
				<a href="{{ url('/historia') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Saber Mas</a>
			</div>
		</div>

			</div>
		</div>

	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Siguiente</span>
	</a>

<section class="all-content">
  <div class="row">

		<aside class="col-md-3" style="  background-color: beige; margin-left: 75%;">
			<br>
		  <h4>Otras Categorias</h4>
			<div class="list-group hidden-xs hidden-sm">
				<a href="{{ url('/historia') }}" class="list-group-item">Historia</a>
				<a href="{{ url('/noticias') }}" class="list-group-item">Noticias</a>
				<a href="{{ url('/postulacion') }}" class="list-group-item">Postula</a>
				<a href="{{ url('/galerias') }}" class="list-group-item">Galerias</a>
				<a href="{{ url('/contacto') }}" class="list-group-item">Contacto</a>
			</div>
			<!-- Twitter API -->

			<div class="mb-2">
				<div class="">
					<div class=" ">
						<blockquote class="card-blockquote time-api">
						<!-- tutiempo.net - Ancho:300px - Alto:411px -->
						<iframe src="https://www.meteoblue.com/es/tiempo/widget/daily/chill%c3%a1n_chile_3895088?geoloc=fixed&days=7&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windspeed=1&windgust=0&winddirection=0&winddirection=1&uv=0&uv=1&humidity=0&humidity=1&precipitation=0&precipitation=1&precipitationprobability=0&precipitationprobability=1&spot=0&pressure=0&layout=dark&location_url=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fwidget%2Fdaily%2Fchill%25c3%25a1n_chile_3895088&location_mainUrl=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fpronostico%2Fdaily%2Fchill%25c3%25a1n_chile_3895088&nolocation_url=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fwidget%2Fdaily&nolocation_mainUrl=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fpronostico%2Fdaily&dailywidth=54&tracking=%3Futm_source%3Dweather_widget%26utm_medium%3Dlinkus%26utm_content%3Ddaily%26utm_campaign%3DWeather%252BWidget"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 95%;height: 363px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/es/tiempo/pronostico/daily/chill%c3%a1n_chile_3895088?utm_source=weather_widget&utm_medium=linkus&utm_content=daily&utm_campaign=Weather%2BWidget" target="_blank"></a></div>

						</blockquote>
					</div>
				</div>
			</div>





			<div class="mb-2 hidden-xs hidden-sm">
        <div class="">
          <div class="">
            <blockquote class="">
               <div class=" ">

<a class="twitter-timeline" data-lang="es" data-width="500" data-height="700" data-theme="dark" href="https://twitter.com/bomberoschillan?ref_src=twsrc%5Etfw">Tweets by bomberoschillan</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>
            </blockquote>
          </div>
        </div>
      </div>


		</aside>


  	<section class="posts col-md-9" style="  background-color: beige; margin-left: -100%;">
  		<div class="notices">
  			<ol class="breadcrumb">
					<li class="breadcrumb-item active">Inicio</li>
  			</ol>
  		</div>

			@foreach($noti as $noticia)
		 <article class="post clearfix">
		 	<a href="noticia.blade.php" class="thumb float-left">
		 		<img class="img-thumbnail"src="{{Voyager::image($noticia->fotoportada)}}" alt="">
		 	</a>
		 <?php
		 $str = $noticia->descripcion;
		 $new_str = str_replace("&nbsp;", '', $str);

		 ?>		<h2 class="post-title">
		 		<a >{{$noticia->titulo}}</a>
		 	</h2>
		 	<p><span class="post-fecha">{{ str_limit($noticia->fechapublicada, $limit = 10, $end = '' )}}</span> por <span class="post-autor"><a>{{$noticia->cargo_id}}</a></span></p>
		 	<p class="post-contenido text-justify">{!!  str_limit( $new_str, $limit = 690, $end = '...')  !!}</p>
		 	<div class="contenedor-botones">
		 		<a class="btn btn-primary" href="/FotoNoticia/{{$noticia->id}}">Leer Mas</a>
		 	</div>
		 </article>

		 @endforeach

			@foreach($galeri as $galeria)

	    <?php
	    $str = $galeria->descripcion;
	    $new_str = str_replace("&nbsp;", '', $str);

	   ?>

			<article class="post clearfix">
        <a href="#" class="thumb float-left">
					<img class="img-thumbnail" src="{{Voyager::image($galeria->fotoportada)}}" alt="">
				</a>
				<h2 class="post-title">
          <a href="/Foto/{{$galeria->id}}">{{$galeria->titulo}}</a>
				</h2>
				<p><span class="post-fecha">{{ str_limit($galeria->fechapublicada, $limit = 10, $end = ''  )}} </span> por <span class="post-autor"><a>{{$galeria->cargo_id}} </a></span></p>
        <p class="post-contenido text-justify">{!!  str_limit( $new_str, $limit = 590, $end = '...')  !!} </p>
        <div class="contenedor-botones">
        	<a class="btn btn-primary" href="/Foto/{{$galeria->id}}">Ver Galería</a>
        </div>




			</article>
 @endforeach


  	</section>

  </div>

</section>
</div>



<footer>

<div class="container-footer-all">

		   <div class="container-body">

				   <div class="colum1">
						   <h1>Donde Ubicarnos </h1>

						   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2264.2484296515336!2d-72.0809452891495!3d-36.6232371497802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966929c7d0eeb23f%3A0x46bda1832a73cc9d!2sTercera+Compa%C3%B1ia+Bomberos+Chill%C3%A1n!5e0!3m2!1ses-419!2scl!4v1557357150666!5m2!1ses-419!2scl" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

				   </div>

				   <div class="colum2">

						   <h1>Redes Sociales</h1>

						   <div class="row2">
						   <img src="sitioWeb/icons/facebook.png"  width="36px" height="36px">
								   <label><a href="https://www.facebook.com/Bomberos-de-Chillan-1867817023439394/?ref=nf&hc_ref=ARSR_f3S_er2mThxiwKL3mQFmq8Ykhf7GrOYBHp3OdKhR7bSNosbh-1lENLlD-_QziM"> Siguenos en Facebook</a></label>

						   </div>

						   <div class="row2">
						   <img src="sitioWeb/icons/twitter.png"  width="36px" height="36px">
								   <label><a href="https://twitter.com/bomberoschillan"> Siguenos en Twitter</a></label>

						   </div>

				   </div>

				   <div class="colum3">

						<h1>Links de Interes</h1>
						<div class="row1">
							<label><a href="{{ url('/historia') }}">Historia</a></label>
						</div>
						<div class="border"></div>
						<div class="row1">
						    <label><a href="{{ url('/noticias') }}">Noticias</a></label>
						</div>
						<div class="border"></div>
						<div class="row1">
							<label><a href="{{ url('/galerias') }}">Galerias</a></label>
						</div>
						<div class="border"></div>
						<div class="row1">
							<label><a href="{{ url('/postulacion') }}">Postula</a></label>
						</div>
						<div class="border"></div>


				   </div>

		   </div>

   </div>

   <div class="container-footer">
				<div class="footer">
						   <div class="copyright">
							   Tercera Compañia de Bomberos de Chillan
						   </div>

						   <div class="information">
								   <a href="{{ url('/contacto') }}">Correo: secretaria@bomberoschillan.cl | Telefono: +56 42 2 222233 </a>
						   </div>
				   </div>

		   </div>

</footer>

<script src="sitioWeb/js/jquery-3.3.1.min.js"></script>
<script src="sitioWeb/js/bootstrap.min.js"></script>
<script >
Array.prototype.forEach.call(document.querySelectorAll('.pd-parallax'), function(elem){
elem.style.backgroundImage= 'url('+elem.getAttribute('data-parallax-image')+')';
})

</script>

</body>
</html>
