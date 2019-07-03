<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Historium extends Model
{

  protected $table = "historia";
  protected $fillable = ['id','titulo','descripcion','archivo'];  
}
