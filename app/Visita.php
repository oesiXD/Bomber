<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Visita extends Model
{
    protected $table ='visitas';
    protected $fillable =['lugar','fecha','created_at']; 
}
