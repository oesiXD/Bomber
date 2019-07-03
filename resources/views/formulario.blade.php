<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Postula Ya Para ser Voluntario de Nuestro Cuerpo de Bomberos</title>
	<link href="sitioWeb/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="sitioWeb/css/styleform.css" rel="stylesheet">
	<link href="sitioWeb/css/stylefooter.css" rel="stylesheet">
</head>
<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
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
						<a class="nav-link" href="{{ url('/galerias') }}">Galerias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" >Formulario</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-formulario">
		<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Formulario</li>
      </ol>
    </nav>
		<div class="row justify-content-center">
			<div class="col-md-4 requisitos bg-info">
				<h1 class="display-4">Requisitos</h1>
				<hr class="">
				<p>Si tu deseo es postular y formar parte de la Tercera Compañía de Bomberos de Chillán, debes cumplir los siguientes requisitos:</p>
				<p>1. Tener más de 18 años</p>
				<p>2. Tener salud compatible con el servicio</p>
				<p>3. Compromiso</p>
				<p>Y lo mas importante: ¡Vocacion de servicio!</p>
				<p>Para ello puedes completar el siguiente formulario con tus datos, contándonos brevemente del porqué deseas ingresar a la Compañía. Posteriormente serás contactado para continuar con el proceso.</p>
			</div>
			<div class="col-md-8 formulario-vol">
        <h1 class="display-4">Formulario</h1>
				<hr class="bg-info">
        <form method="POST" action="{{route('postulacion')}}">
		{{ csrf_field() }}
					  <div class="row form-group">
							<label class="col-form-label col-md-3" for="nombres">Nombre:</label>
							<div class="col-md-12">
								<input type="text" id="nombres" name="nombres" value="{{ old('nombres') }}" class="form-control">
							    {!! $errors->first('nombres', '<small>:message</small>') !!}
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-3" for="apellidos">Apellidos:</label>
							<div class="col-md-12">
								<input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" class="form-control">
							    {!! $errors->first('apellidos', '<small>:message</small>') !!}
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-3" for="correo">Correo:</label>
							<div class="col-md-12">
								<input type="email" id="correo" name="correo" value="{{ old('correo') }}" class="form-control">
							    {!! $errors->first('correo', '<small>:message</small>') !!}
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-4" for="telefono">Telefono:</label>
							<div class="col-md-12">
								<input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" class="form-control">
							    {!! $errors->first('telefono', '<small>:message</small>') !!}
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-3" for="edad">Edad:</label>
							<div class="col-md-12">
								<input type="number" id="edad" name="edad" value="{{ old('edad') }}" class="form-control">
							    {!! $errors->first('edad', '<small>:message</small>') !!}
							</div>
						</div>
						<div class="row form-group">
							<label class="col-form-label col-md-5" for="motivo">¿Porque Quieres ser Bombero?:</label>
							<div class="col-md-12">
								<textarea type="text" id="motivo" name="motivo" value="{{ old('motivo') }}" rows="4" class="form-control"></textarea>
							    {!! $errors->first('motivo', '<small>:message</small>') !!}
							</div>
						</div>

						<button type="submit" id="btn-submit" class="btn btn-info btn-block">Enviar</button>

        </form>
			</div>
		</div>
	</div>

	<br>

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

<script src="sitioWeb/js/jquery-3.3.1.min.js"></script>
<script src="sitioWeb/js/bootstrap.min.js"></script>

</body>
</html>
