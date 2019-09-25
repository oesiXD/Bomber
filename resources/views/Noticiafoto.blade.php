<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Noticia</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="/sitioWeb/css/stylenavbar.css" rel="stylesheet">
	<link href="/sitioWeb/css/stylefooter.css" rel="stylesheet">
    <link rel="stylesheet" href="/sitioWeb/css/styleparagraph2.css">
    <link rel="stylesheet" href="/sitioWeb/css/stylephoto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</head>

<body>
	<!--- Navigation -->
	<nav id="menu" class="my-navbar navbar navbar-dark bg-dark navbar-expand-md">
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
							<a class="nav-link" href="{{ url('/inicio') }}">Inicio <br><hr class="bg-navbar"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/historia') }}">Historia<br><hr class="bg-navbar"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/noticias') }}">Noticias<br><hr class="bg-navbar"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/galerias') }}">Galerías<br><hr class="bg-navbar"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/postulacion') }}">Formulario<br><hr class="bg-navbar"></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<!--- End Navigation -->
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
		@foreach($noti as $galeria)
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{Voyager::image($galeria->fotoportada)}}" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
        <h1>{{$galeria->titulo}}</h1>
				<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/inicio') }}" title="" itemprop="url">Inicio</a></li>
					<li class="breadcrumb-item"><a href="{{ url('/noticias') }}" title="" itemprop="url">Noticias</a></li>
          <li class="breadcrumb-item active">{{ str_limit($galeria->titulo, $limit = 10, $end = '...' )}}</li>
        </ol>
      </div>
	</div>
	@endforeach
  </div>
</div>
<div class="container-historia">


<div class="row">
	<div class="col-md-9">
<section>
		@foreach($noti as $galeria)
<article class="">
	<div class="border2"></div>
	<div class="container-details-notice container row">
		<p class="details-post1"><span class="post-fecha"><i class="fas fa-calendar"></i> {{ str_limit($galeria->fechapublicada, $limit = 10, $end = '' )}}</span></p>
		<p class="details-post2"><span class="post-autor"><i class="fas fa-user"></i><a> {{$galeria->cargo_id}}</a></span></p>
	</div>
	<div class="border2"></div>
    <p>{!! $galeria->descripcion !!}</p>
    <div class="contenedor-galeria">
			@foreach($noti as $fotos)

			<?php
			$strf = $fotos->archivo;
			?>

		 @if (($strf)!=NULL)

				 <?php $images = json_decode($fotos->archivo); ?>
				@foreach($images as $image)
				  <a href="{{ Voyager::image($image) }}" class="image">
					<img src="{{ Voyager::image($image) }}" />
					</a>
				@endforeach

				@else
				<p>No se han agregado Fotos aun a esta Noticia</p>
			@endif

			@endforeach
    </div>

    @foreach($noti as $galeria)

    <h3>Redacción: <h5> {{$galeria->cargo_id}}, {{$galeria->nombre}} {{$galeria->apellidoP}} {{$galeria->apellidoM}}  </h5> </h3>

	@endforeach
</article>
@endforeach
</section>

</div>
<div class="col-md-3">
		<aside class="">
				<h4>Noticias de Interés</h4>
				@foreach($notis as $noticia)
				<div class="notice-aside">
					<div class="thumb float-left image-notice">
						<img src="{{Voyager::image($noticia->fotoportada)}}" alt="">
					</div>
					<?php
					  $str = $noticia->descripcion;
					  $new_str = str_replace("&nbsp;", '', $str);
					  ?>
					<h2 class="post-title">
						<a href="/FotoNoticia/{{$noticia->id}}">{{$noticia->titulo}}</a>
					</h2>
					<p class="details-post"><span class="post-fecha"><i class="fas fa-calendar"></i> {{ str_limit($noticia->fechapublicada, $limit = 10, $end = '' )}} </span> |  <span class="post-autor"><i class="fas fa-user"></i><a> {{$noticia->cargo_id}}</a></span></p>
					<p class="post-contenido text-justify">{!!  str_limit( $new_str, $limit = 350, $end = '...')  !!}</p>
					<div class="container-read-more">
						<hr class="bg-post-notice">
						<a class="post-link" href="/FotoNoticia/{{$noticia->id}}">Ver Noticia</a>
					</div>
				</div>
				@endforeach
			</aside>
</div>
</div>
</div>
<footer>

		<div class="container-footer-all">
			<div class="row column">
				<div class="col-md-3">
					<h1>Links de Interés</h1>
						<div class="row1">
							<label><a href="{{ url('/historia') }}">Historia</a><br><div class="border"></div></label>
						</div>

						<div class="row1">
								<label><a href="{{ url('/noticias') }}">Noticias</a><br><div class="border"></div></label>
						</div>

						<div class="row1">
							<label><a href="{{ url('/galerias') }}">Galerías</a><br><div class="border"></div></label>
						</div>

						<div class="row1">
							<label><a href="{{ url('/postulacion') }}">Postula</a><br><div class="border"></div></label>
						</div>

				</div>
				<div class="col-md-6 footer-contact">
					<h1>¿Dónde Ubicarnos? </h1>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2264.2484296515336!2d-72.0809452891495!3d-36.6232371497802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966929c7d0eeb23f%3A0x46bda1832a73cc9d!2sTercera+Compa%C3%B1ia+Bomberos+Chill%C3%A1n!5e0!3m2!1ses-419!2scl!4v1557357150666!5m2!1ses-419!2scl" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				<div class="col-md-3 footer-contact">
					<h1>Contacto</h1>
					<p><i class="fas fa-envelope"></i> secretaria@bomberoschillan.cl</p>
					<p><i class="fas fa-phone"></i> +56 42 2 222233</p>
					<p><i class="fas fa-map-marker-alt"></i> Monterrico #1438, Chillán</p>
				</div>
			</div>
		</div>
		<div class="container-footer">
					 <div class="footer">
								<div class="copyright">
									Tercera Compañía de Bomberos de Chillan
								</div>

								<div class="information">
										<a href="https://twitter.com/bomberoschillan"><i class="fab fa-twitter"></i></a>
										<a href="https://www.facebook.com/Bomberos-de-Chillan-1867817023439394/?ref=nf&hc_ref=ARSR_f3S_er2mThxiwKL3mQFmq8Ykhf7GrOYBHp3OdKhR7bSNosbh-1lENLlD-_QziM"><i class="fab fa-facebook"></i></a>
										<a href=""><i class="fas fa-envelope"></i></a>

								</div>
						</div>

				</div>

	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script>
	  $(".contenedor-galeria").magnificPopup({
	    delegate: 'a',
	    type: 'image',
	    gallery:{
	      enabled: true
	    }
	  });
	</script>
</body>
</html>
