<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diario Mural</title>
    <link rel="stylesheet" href="diarioMural/css/stylecard.css">
    <link rel="stylesheet" href="diarioMural/css/styleload.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="calendar/css/fullcalendar.css"/>
    <script src="calendar/js/es.js"></script>
  </head>
  <style>
@import url('https://fonts.googleapis.com/css?family=Sawarabi+Mincho');


.Tamañocalendar{
    margin-top:5%;
    margin-left:19%;
    width:60%;
    height:60%;


}
        body {
          margin: 0;
          padding: 0;
          font-size: 14px;
        }

        #top,
        #calendar.fc-unthemed {
          font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        }

        #top {
          background: #eee;
          border-bottom: 1px solid #ddd;
          padding: 0 10px;
          line-height: 40px;
          font-size: 12px;
          color: #000;
        }

        #top .selector {
          display: inline-block;
          margin-right: 10px;
        }

        #top select {
          font: inherit; /* mock what Boostrap does, don't compete  */
        }

        .left { float: left }
        .right { float: right }
        .clear { clear: both }

        #calendar {
          max-width: 900px;
          margin: 40px auto;
          padding: 0 10px;
        }
        .panel-default>.panel-heading {
            color: #333;
            background-color: #2976b9;
            border-color: #ddd;
        }
        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
        h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.lado
{

  margin-left: 1%;
      background-color: white;
      padding: 0.5%;
}
</style>
  <body style=" background-color: #fbefcc">
    <!--<div id="loader">
      <img src="diarioMural/images/logo.png" alt="">
    </div> -->

    <div class="sec-ide">
            <section>
              <article class="" >
                <div id="recargar">
                     <div class="container-card">
                        <div class="card middle">
                         <div class="top-section">
                         <img src="diarioMural/images/B-3.png" alt="">
                         <div class="name">
                            Tareas del Día
                         </div>
                         </div>
              @foreach($tare as $tareas)
              <div class="info-section">
                <h2>{{$tareas->titulo}}
                  <div class="border"></div>
                </h2>
                  <p>
                  {{$tareas->descripcion}}
                  </p>
              </div>
              @endforeach
            </div>

            <div class="card middle">
              <div class="top-section">
                <img src="diarioMural/images/B-5.jpg" alt="">
                <div class="name">
                  Visitas
                </div>
              </div>
              @foreach($visit as $visitas)
              <div class="info-section">
                <h2>Visita pendiente a {{$visitas->lugar}}
                  <div class="border"></div>
                </h2>
                  <p>
                    Fecha: {{$visitas->fecha}}
                  </p>
              </div>
              @endforeach
            </div>
          </div>

          <div class="container-card">
            <div class="card middle">
              <div class="top-section">
                <img src="diarioMural/images/B-4.jpg" alt="">
                <div class="name">
                  Novedades
                </div>
              </div>
              @foreach($novedad as $novedades)
              <div class="info-section">
                <h2>{{$novedades->descripcion}}
                  <div class="border"></div>
                </h2>
              </div>
              @endforeach
            </div>

            <div class="card middle">
              <div class="top-section">
                <img src="diarioMural/images/B-6.png" alt="">
                <div class="name">
                  Observaciones
                </div>
              </div>
              @foreach($observacion as $observaciones)
              <div class="info-section">
                <h2>{{$observaciones->descripcion}}
                  <div class="border"></div>
                </h2>
              </div>
              @endforeach
            </div>
          </div>
          <div class="container-aviso">
            <div class="aviso">
              @foreach($avis as $aviso)
              <div class="info-aviso">
                <h1>{{$aviso->descripcion}}
                </h1>
              </div>
              @endforeach
            </div>
        </div>

          </article>
          <article class="">
          </article>
          </section>
          <aside>
            <div class="col-12 col-md-12 col-xs-12 father">
              <!-- Cards -->

              <!-- Fin Cards -->
              <!-- Cards -->
              <div class="mb-2">
                <div class="">
                  <div class= "col-12">
                        <div class="time-api">
                                <!-- tutiempo.net - Ancho:300px - Alto:411px -->
                                <iframe src="https://www.meteoblue.com/es/tiempo/widget/daily/chill%c3%a1n_chile_3895088?geoloc=fixed&days=7&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windspeed=1&windgust=0&winddirection=0&winddirection=1&uv=0&uv=1&humidity=0&humidity=1&precipitation=0&precipitation=1&precipitationprobability=0&precipitationprobability=1&spot=0&pressure=0&layout=dark&location_url=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fwidget%2Fdaily%2Fchill%25c3%25a1n_chile_3895088&location_mainUrl=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fpronostico%2Fdaily%2Fchill%25c3%25a1n_chile_3895088&nolocation_url=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fwidget%2Fdaily&nolocation_mainUrl=https%3A%2F%2Fwww.meteoblue.com%2Fes%2Ftiempo%2Fpronostico%2Fdaily&dailywidth=54&tracking=%3Futm_source%3Dweather_widget%26utm_medium%3Dlinkus%26utm_content%3Ddaily%26utm_campaign%3DWeather%252BWidget"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width:100% ;height: 363px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/es/tiempo/pronostico/daily/chill%c3%a1n_chile_3895088?utm_source=weather_widget&utm_medium=linkus&utm_content=daily&utm_campaign=Weather%2BWidget" target="_blank"></a></div>

                     </div>

                  </div>
                </div>
              </div>
              <!-- Fin Cards -->
              <div class="mb-2">
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
            </div>
          </aside>
        </div>
  </body>
  <script>
  $(document).ready(function () {
    var myInterval = false;
    myInterval = setInterval(function () {
        var iScroll = $(window).scrollTop();
        if (iScroll + $(window).height() == $(document).height()) {
            iScroll = iScroll - document.height;
            $('html, section').animate({
                scrollTop: iScroll
            }, 1000);

        } else{
            iScroll = iScroll + 200;
            $('html, section').animate({
                scrollTop: iScroll
            }, 1000);
        }
    }, 3000);
});
  </script>

  <script>
        $(document).ready(function()
        {
            var refresh = setInterval( function()
            {
                $('#recargar').load('/Mural/recargar');
            }, 25000);
        });
    </script>
</html>
