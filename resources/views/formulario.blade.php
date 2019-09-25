<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Formulario</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="sitioWeb/css/stylenavbar.css" rel="stylesheet">
	<link href="sitioWeb/css/stylefooter.css" rel="stylesheet">
  <link href="sitioWeb/css/styleform.css" rel="stylesheet">
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
							<a class="nav-link active">Formulario<br><hr class="bg-navbar"></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <!--- End Navigation -->



	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">


            @foreach($portS as $noticia)
            <img class="d-block w-100" src="{{Voyager::image($noticia->archivo)}}" alt="First slide">
            @endforeach
			<div class="carousel-caption d-none d-md-block">
        <h1>Postula</h1>
				<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/inicio') }}" title="" itemprop="url">Inicio</a></li>
          <li class="breadcrumb-item active">Formulario</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--
<h1 class="display-4">Requisitos</h1>
<hr class="">
<p>Si tu deseo es postular y formar parte de la Tercera Compañía de Bomberos de Chillán, debes cumplir los siguientes requisitos:</p>
<p>1. Tener más de 18 años</p>
<p>2. Tener salud compatible con el servicio</p>
<p>3. Compromiso</p>
<p>Y lo mas importante: ¡Vocacion de servicio!</p>
<p>Para ello puedes completar el siguiente formulario con tus datos, contándonos brevemente del porqué deseas ingresar a la Compañía. Posteriormente serás contactado para continuar con el proceso.</p>

-->
	<div class="container-formulario">
		<div class="row justify-content-center" style="padding: 1%; border-radius: 0.4%; background-color: beige;">

			<div class="col-md-8 formulario-vol">
        <h1 class="display-4">Formulario</h1>
				<hr class="bg-info">
        <form class="" method="POST" action="{{route('postulacion')}}">
            {{ csrf_field()}}
					<div class="container row">
					  <div class="row form-group form-name col-md-12">
							<label class="col-form-label col-md-3" for="nombres">Nombre:</label>
							<div class="col-md-12">
                                <input type="text" id="nombres" name="nombres" value="{{old('nombres')}}" class="form-control" required>
                                {!! $errors->first('nombres','<small>:message</small>')!!}
							</div>
						</div>
						<div class="row form-group form-lastname col-md-12">
							<label class="col-form-label col-md-3" for="apellidos">Apellidos:</label>
							<div class="col-md-12">
                                <input type="text" id="apellidos" name="apellidos" value="{{old('apellidos')}}" class="form-control" required>
                                {!! $errors->first('apellidos','<small>:message</small>')!!}
							</div>
						</div>
						<div class="row form-group form-mail col-md-12">
							<label class="col-form-label col-md-3" for="correo">Correo:</label>
							<small class="col-md-12">
                                <input type="email" id="correo" name="correo" value="{{old('correo')}}" class="form-control" required>
                                {!! $errors->first('correo','<small>:message</small>')!!}
							</small>
						</div>
						<div class="row form-group form-number col-md-6">
							<label class="col-form-label col-md-4" for="telefono">Teléfono:</label>
							<div class="col-md-12">
                                <input type="tel" id="telefono" name="telefono" value="{{old('telefono')}}" class="form-control" required>
                                {!! $errors->first('telefono','<small>:message</small>')!!}
							</div>
						</div>
						<div class="row form-group form-age col-md-6">
							<label class="col-form-label col-md-3" for="edad">Edad:</label>
							<div class="col-md-12">
                                <input type="number" id="edad" name="edad" value="{{old('edad')}}" class="form-control" required>
                                {!! $errors->first('edad','<small>:message</small>')!!}
							</div>
						</div>
						<div class="row form-group form-textarea col-md-12">
							<label class="col-form-label col-md-5" for="motivo">¿Porqué Quieres ser Bombero?:</label>
							<div class="col-md-12">
                                <textarea type="text" id="motivo" name="motivo" value="{{old('motivo')}}" rows="4" class="form-control" required></textarea>
                                {!! $errors->first('motivo','<small>:message</small>')!!}
							</div>
						</div>
						<div class="row form-group form-button col-md-12">
							<div class="col-md-12">
								<button type="submit" id="btn-submit" class="btn btn-info btn-block">Enviar</button>
							</div>
						</div>
					</div>
        </form>
			</div>
			<div class="col-md-4 requisitos">
				<h1 class="display-4">Contacto</h1>
				<hr class="bg-info">
				<div class="row container">
					<ul class="col-md-12 cnt-inf-lst">
						<li><i class="fas fa-envelope"></i><strong>Email</strong><span>secretaria@bomberoschillan.cl</span></li>
						<li><i class="fas fa-map-marker-alt"></i><strong>Ubicación</strong><span>Monterrico #1438, Chillán</span></li>
						<li><i class="fas fa-phone"></i><strong>Teléfono</strong><span>+56 42 2 222233</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<br>

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
						<h1>¿Dónde Ubicarnos?s </h1>

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

</body>
</html>
