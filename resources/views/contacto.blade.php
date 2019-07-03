<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Contacto</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link href="sitioWeb/css/bootstrap.min.css" rel="stylesheet">
	<link href="sitioWeb/css/stylefooter.css" rel="stylesheet">
	<link href="sitioWeb/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="sitioWeb/css/stylecontact.css">

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
			<a class="navbar-brand" ></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
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
						<a class="nav-link" href="{{ url('/postulacion') }}">Formulario</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->
	<div class="container-historia">
	<div class="notices">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('/inicio') }}">Inicio</a></li>
			<li class="breadcrumb-item active" aria-current="page">Contacto</li>
		</ol>
	</div>
<section>
<article class="">

<div class="row">
    <div class="container-contact col-md-5">
    <h1>Contacto</h1>
     <h3><img src="sitioWeb/icons/mail.png"> secretaria@bomberoschillan.cl</h3>
    <h3><img src="sitioWeb/icons/phone.png"> +56 42 2 222233</h3>
    <h3><img src="sitioWeb/icons/location.png"> Monterrico #1438, Chillán</h3>
     </div>
	<div class="container-iframe col-md-6">
    <iframe class="frame-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2264.2484296515336!2d-72.0809452891495!3d-36.6232371497802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966929c7d0eeb23f%3A0x46bda1832a73cc9d!2sTercera+Compa%C3%B1ia+Bomberos+Chill%C3%A1n!5e0!3m2!1ses-419!2scl!4v1557357150666!5m2!1ses-419!2scl" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
     
</article>
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

</body>
</html>
