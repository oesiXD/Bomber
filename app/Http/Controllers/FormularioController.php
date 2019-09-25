<?php

namespace App\Http\Controllers;

use App\Mail\MensajePostulacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $numero = DB::table('portadas')->count();

        $numeros = range(1, $numero);
        shuffle($numeros);
        foreach ($numeros as $numero) {
            $num = $numero;
        }

        $portS = DB::table('portadas')->where('id',$num)->get();

        return view('formulario', compact('portS'));
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
    public function store()
    {
        $mensaje = request()->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'edad'=>'required',
            'motivo'=>'required'
        ]);
        Mail::to('urbanforgod@gmail.com')->queue(new MensajePostulacion($mensaje));
        return view('/gracias');
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
