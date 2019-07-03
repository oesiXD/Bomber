<?php

namespace App\Http\Controllers;
use App\Tarea;
use App\Observacione;
use App\Visita;
use App\Novedade;
use App\Aviso;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Illuminate\Http\Request;

class MuralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tare = Tarea::all();
        $observacion = Observacione::all();
        $visit = Visita::all();
        $novedad = Novedade::all();
        $avis = Aviso::all();

        $events = Event::all();
        $event =[];

        foreach($events as $row){
         $enddate = $row->end_date.' 24:00:00';
            $event[] = \Calendar::event(

                $row->titulo,

                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                'color' => $row->color,
                ]
            );
       }
        $calendar = \Calendar::addEvents($event);
                return view('mural', compact('tare',$tare,'observacion',$observacion,'visit',$visit,'novedad',$novedad,'avis',$avis,'events',$events,'calendar',$calendar));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function recargar(){
        $tare = Tarea::orderBy('created_at', 'desc')->paginate(5);
        $observacion = Observacione::orderBy('created_at', 'desc')->paginate(5);
        $visit = Visita::orderBy('created_at', 'desc')->paginate(5);
        $novedad = Novedade::orderBy('created_at', 'desc')->paginate(5);
        $avis = Aviso::orderBy('created_at', 'desc')->paginate(1);

        $events = Event::all();
        $event =[];

        foreach($events as $row){
         $enddate = $row->end_date.' 24:00:00';
            $event[] = \Calendar::event(

                $row->titulo,

                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                'color' => $row->color,
                ]
            );
       }
        $calendar = \Calendar::addEvents($event);




        echo ("<article class=''>
        <div class='container-card'>
            <div class='card middle'>
            <div class='name' style=''>
            Tareas del Día
            </div>

          <div class='top-section'>
            <img src='diarioMural/images/B-3.png' alt='>

              <div class='name'>

              <div class='info-section' >
         ");


          foreach($tare as $tareas){
              echo"

            <h2>".$tareas->titulo." </h2>
              <p> ".$tareas->descripcion." </p>



          ";}
          echo "
          </div>
 </div>
 </div>
          <div class='card middle'>
          <div class='name' style=''>
          Visitas

          </div>
               <div class='top-section'>
                   <img src='diarioMural/images/B-5.jpg' alt='>

                 <div class='name'>

                 </div>
                     <div class='info-section'>

          ";
          foreach($visit as $visitas){
              echo"

                 <h2>Visita pendiente a ".$visitas->lugar."</h2>
                 <p>Fecha: ".$visitas->fecha." </p>





          ";}

          echo"
          </div> </div>
          </div>
        <div class='container-card'>
             <div class='card middle'>

             <div class='name' style=''>

             Novedades
             </div>

            <div class='top-section'>
            <img src='diarioMural/images/B-4.jpg' alt='>
            <div class='name'>


          ";
          foreach($novedad as $novedades){
              echo"
                <div class='info-section'>
                 <h2>".$novedades->descripcion." </h2>
                 </div>


          ";}
          echo"
          </div>
          </div>
        <div class='card middle'>
        <div class='name' style=''>

        Observaciones
        </div>
          <div class='top-section'>
            <img src='diarioMural/images/B-6.png' alt='>
            <div class='name'>
            <div class='info-section'>

          ";
          foreach($observacion as $observaciones){
              echo("

              <div class='info-section'>
              <h2>".$observaciones->descripcion." </h2>
                 </div>






          ");}
          echo"

          </div>
          </div>
          </div>
          </div>
      <div class='container-aviso'>
        <div class='aviso'>
        ";
          foreach($avis as $aviso){
        echo"
        <marquee  >
          <div class='info-aviso'>

            <h1>".$aviso->descripcion."</h1>

          </div>
          </marquee>
          ";}
          echo"
        </div>
    <br>
    <br>
    <div class='container lado'>


    <div class='col-md-12 ' >

    <div class='panel panel-default'>
    <div class='panel-heading' style='#2e6da4; color:white;' >
        Agenda de Actividades [Bomberos]
    </div>
    <div class='panel-body'>
        ".$calendar->calendar() ."
        ". $calendar->script() ."
    </div>
    </div>
    </div>

    </div>

      </article>
      <article class='>
    </article>";

    }
}
