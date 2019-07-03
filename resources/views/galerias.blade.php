<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Galerias</title>
	<link href="sitioWeb/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link href="sitioWeb/css/style.css" rel="stylesheet">
	<link href="sitioWeb/css/stylefooter.css" rel="stylesheet">
</head>
<body style="    background: lightblue;">
	<!--- Navigation -->
	<nav id="menu" class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
		<div class="container-fluid">
				<a href="{{ url('/inicio') }}">
						<span  >
								<img src="sitioWeb/images/log.png" href="{{ url('/inicio') }}"  alt="responsive image" width="260px" height="80px">
						</span>
					</a>
			<a class="navbar-brand"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/inicio') }}">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/historia') }}">Historia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/noticias') }}">Noticias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active">Galerias</a>
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

	<div class="container-inicio " style="background-color: lightblue; ">
	<section class="all-content" style="background-color: beige;">
	  <div class="row" style="padding: 1%;">
			<aside class="col-md-3" style="    margin-left: 75%;">
				<h4>Otras Categorias</h4>
				<div class="list-group hidden-xs hidden-sm">
						<a href="{{ url('/inicio') }}" class="list-group-item">Inicio</a>
					<a href="{{ url('/historia') }}" class="list-group-item">Historia</a>
					<a href="{{ url('/noticias') }}" class="list-group-item">Noticias</a>
					<a href="{{ url('/postulacion') }}" class="list-group-item">Postula</a>
					<a href="{{ url('/contacto') }}" class="list-group-item">Contacto</a>
				</div>
				<!-- Twitter API -->
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
	  	<section class="posts col-md-9" style="    margin-left: -100%;">
	  		<div class="notices">
	  			<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.blade.php">Inicio</a></li>
						<li class="breadcrumb-item active" aria-current="page">Galerias</li>
	  			</ol>
	  		</div>


						@foreach($galeri as $galeria)
				<article class="post clearfix">
	      	<a href="#" class="thumb float-left">
						<img class="img-thumbnail" src="{{Voyager::image($galeria->fotoportada)}}" alt="">
					</a>
		<?php
					$str = $galeria->descripcion;
					$new_str = str_replace("&nbsp;", '', $str);

				 ?>

				<div class="" style="background-color: khaki;  padding: 1%; border-radius: 0.5%;">
	          <a style="font-size: 2rem; font-weight: 500;">{{$galeria->titulo}}</a>
					</h2>
						<p><span class="post-fecha">{{ str_limit($galeria->fechapublicada, $limit = 10, $end = ''  )}} </span> por <span class="post-autor"><a>{{$galeria->cargo_id}}</a></span></p>


	              <p class="post-contenido text-justify">{!!  str_limit( $new_str, $limit = 590, $end = '...')  !!} </p>

	        <div class="contenedor-botones">
	        	<a class="btn btn-primary" href="/Foto/{{$galeria->id}}">Ver Galería</a>
	        </div>

				</div>
				</article>

	@endforeach


	<nav aria-label="Page navigation example">
											@if($galeri->total() != 0)
																<div class="Zebra_Pagination">Pagina numero
																 {{ ($galeri->currentpage()-1) * $galeri->perpage()+1}} vistas
																 {{(($galeri->currentpage()-1) * $galeri->perpage())+$galeri->count()}} de
																 {{$galeri->total()}} Total
																</div>

                                 <div class="Container">

																	{{ $galeri->links() }}
																	 @else
																	No se han encontrado resultados
																		@endif

																	</div>
																</nav>

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
							<label><a href="{{ url('/postulacion') }}">Postula</a></label>
						</div>
						<div class="border"></div>
						<div class="row1">
							<label><a href="{{ url('/contacto') }}">Contacto</a></label>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
