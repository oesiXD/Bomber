<?php

namespace App\Http\Controllers;
use App\Galeria;
use App\Noticia;
use App\Historium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $noti = Noticia::orderBy('created_at', 'desc')->paginate(4);
      $galeri = Galeria::orderBy('created_at', 'desc')->paginate(4);
      $direx = DB::table('directivos')->get();
      $carrusel = DB::table('carrusels')->get();


      $numero = DB::table('afiches')->count();

      $numeros = range(1, $numero);
      shuffle($numeros);
      foreach ($numeros as $numero) {
          $num = $numero;
      }

      $carrusel1 = DB::table('afiches')->where('id',$num)->get();

      return view('index', compact('noti',$noti,'galeri',$noti,'direx','carrusel','carrusel1'));
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
}
