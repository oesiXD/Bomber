<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Gracias por tu Postulación</title>
  </head>
  <style media="screen">
  html,
  body{
    overflow-x: hidden;
    margin: 0px;
  }
  #bg{
  width: 100%;
  max-width:80vh;
  height:80vh;
  margin:auto;
  }
  .container-bg{
    position:fixed;
    z-index:-100;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items:center;
    background: white;
    opacity: .3;
  }
  section{
    height: 100vh;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items:center;
  }
  .container-content{
    height: 50%;
    text-align: center;
    font-family: "Roboto";
    width: 100%;
    max-width: 120vh;
    margin-right: auto;
    margin-left: auto;
    color: #0d47a1;
    
  }h1{
  font-family: "Roboto";
  font-size: 10vh;
  }
  a{
    text-decoration: none;
    background-color: #0d47a1;
    padding: 10px;
    color: white;

  }
  </style>

  <body>
    <div class="container-bg">
      <img id="bg" src="sitioWeb/images/logo.png">
    </div>
    <section>
    <div class="container-content">
      <h1>Muchas Gracias por tu Solicitud!!!</h1>
      <a class="nav-link" href="{{ url('/inicio') }}">Pagina Principal</a>
    </div>
    </section>
  </body>


</html>
