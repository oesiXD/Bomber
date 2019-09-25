<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="sitioWeb/css/style.css" rel="stylesheet">
    <link href="sitioWeb/css/stylenavbar.css" rel="stylesheet">
  	<link href="sitioWeb/css/stylefooter.css" rel="stylesheet">
    <title>Tercera Chillán</title>
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
  						<a class="nav-link active" href="{{ url('/inicio') }}">Inicio <br><hr class="bg-navbar"></a>
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

  	<!--- Image Slider -->

  <div class="container-home">
  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
            @foreach($carrusel as $carruseli)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
          @endforeach
  	</ol>
  	<div class="carousel-inner">
            @foreach($carrusel as $carruseli)
  		<div class="carousel-item {{ $loop->first ? 'active' : '' }}" style="height: 80vh">
  			<img class="d-block w-100" src="{{Voyager::image($carruseli->archivo)}}" alt="Third slide">
  			<div class="carousel-caption d-none d-md-block">
  				<h3>{{$carruseli->titulo}}</h3>
                  <p>{!! $carruseli->descripcion !!}</p>

  				<a href="{{$carruseli->ruta}}" class="btn btn-lg active" role="button" aria-pressed="true">Saber Más</a>
  			</div>
          </div>
          @endforeach
  	</div>
  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  		<span class="sr-only">Anterior</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  		<span class="carousel-control-next-icon" aria-hidden="true"></span>
  		<span class="sr-only">Siguiente</span>
  	</a>
  	</div>



  <section>
    <div class="row contenido-home">
    	<section class="posts col-md-9">
            @foreach($noti as $noticia)

            <?php
            $fecha = $noticia->fechapublicada;
         $ano = substr($fecha, 2, 2);
         $mes = substr($fecha, 5, 2);
         $dia = substr($fecha, 8, 2);
         ?>
  			<article class="post clearfix">
          <div class="thumb float-left image-notice">
  					<img src="{{Voyager::image($noticia->fotoportada)}}" alt="">
            <div class="date-notice">
              <span class="evnt-dat"><a class="theme-bg" title="" itemprop="url">{{$dia}}<i>{{$mes}}/{{$ano}}</i></a></span>
            </div>
				  </div>
				  <?php
				  $str = $noticia->descripcion;
				  $new_str = str_replace("&nbsp;", '', $str);
				  ?>
  				<h2 class="post-title">
            <a href="/FotoNoticia/{{$noticia->id}}">{{$noticia->titulo}}</a>
  				</h2>

  				<p class="details-post"><span class="post-fecha"><i class="fas fa-calendar"></i> {{ str_limit($noticia->fechapublicada, $limit = 10, $end = '' )}} </span> | <span class="post-autor"><i class="fas fa-user"></i><a> {{$noticia->cargo_id}}</a></span></p>
          <p class="post-contenido text-justify">{!!  str_limit( $new_str, $limit = 490, $end = '...')  !!}</p>
          <div class="contenedor-botones">
          	<a class="btn btn-primary" href="/FotoNoticia/{{$noticia->id}}">Ver Noticia</a>
          </div>
			  </article>
			  @endforeach
              @foreach($galeri as $galeria)
              <?php
            $fecha = $galeria->fechapublicada;
         $ano = substr($fecha, 2, 2);
         $mes = substr($fecha, 5, 2);
         $dia = substr($fecha, 8, 2);
         ?>
  			<article class="post clearfix">
          <div class="thumb float-left image-notice">
  					<img src="{{Voyager::image($galeria->fotoportada)}}" alt="">
            <div class="date-notice">
              <span class="evnt-dat"><a class="theme-bg" title="" itemprop="url">{{$dia}}<i>{{$mes}}/{{$ano}}</i></a></span>
            </div>
				  </div>
				  <?php
	    		  $str = $galeria->descripcion;
	    		  $new_str = str_replace("&nbsp;", '', $str);
				  ?>
  				<h2 class="post-title">
				<a href="/Foto/{{$galeria->id}}">{{$galeria->titulo}}</a>
  				</h2>

  				<p class="details-post"><span class="post-fecha"><i class="fas fa-calendar"></i> {{ str_limit($galeria->fechapublicada, $limit = 10, $end = ''  )}} </span> | <span class="post-autor"><i class="fas fa-user"></i><a> {{$galeria->cargo_id}}</a></span></p>
          <p class="post-contenido text-justify">{!!  str_limit( $new_str, $limit = 490, $end = '...')  !!}</p>
          <div class="contenedor-botones">
          	<a class="btn btn-primary" href="/Foto/{{$galeria->id}}">Ver Galería</a>
          </div>
			  </article>
			  @endforeach
        <div class="tem-sec remove-ext5 text-center">
          <h3 class="title-organigrama">Directorio General</h3>
          <hr class="bg-organigrama">
                        <div class="row">

                                @foreach($direx as $galeria)

                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="tm-bx">
                                    <div class="tm-thmb">
                                        <img src="{{Voyager::image($galeria->archivo)}}" alt="tm-img1.jpg" itemprop="image">
                                        <div class="scl2">
                                            <p> {!! $galeria->descripcion !!}</p>
                                        </div>
                                    </div>
                                    <div class="tm-inf">
                                        <h5 itemprop="headline"><a title="" itemprop="url">{{$galeria->nombre}} {{$galeria->apellidoP}} {{$galeria->apellidoM}}</a></h5>
                                        <span class="theme-clr">{{$galeria->cargo}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

    </section>
  		<aside class="col-md-3">
  		  <h4>Otras Categorías</h4>
  			<div class="list-group hidden-xs hidden-sm">
				<a href="{{ url('/historia') }}" class="list-group-item">Historia</a>
				<a href="{{ url('/noticias') }}" class="list-group-item">Noticias</a>
				<a href="{{ url('/postulacion') }}" class="list-group-item">Postula</a>
				<a href="{{ url('/galerias') }}" class="list-group-item">Galerías</a>
				<a href="{{ url('/postulacion') }}" class="list-group-item">Contacto</a>
			  </div>
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
  			<div class="div-postula">
                @foreach($carrusel1 as $noticia)
                <img class="d-block w-100" src="{{Voyager::image($noticia->archivo)}}" alt="First slide">
                @endforeach
  			</div>
  		</aside>
    </div>
  </section>
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
  								Tercera Compañia de Bomberos de Chillan
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

  </body>
</html>
