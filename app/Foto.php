<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Foto extends Model
{
    protected $table = "fotos"; 
    protected $fillable = ['id','galeria_fk','archivo'];
}
