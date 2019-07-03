<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Novedade extends Model
{
    protected $table ='novedades';
    protected $fillable =['descripcion','created_at']; 
}
