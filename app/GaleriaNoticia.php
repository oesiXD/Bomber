<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriaNoticia extends Model
{

  protected $table = "galerianoticia";
  protected $fillable = ['id','galeriaNoticia_fk','archivo'];

}
