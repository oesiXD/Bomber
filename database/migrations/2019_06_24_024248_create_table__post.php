<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cargo_id');
            $table->string('nombre');
            $table->string('estado');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('fotoportada');
            $table->text('archivo');
            $table->datetime('fechapublicada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');


    }
}
