<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Observacione extends Model
{
    protected $table ='observaciones';
    protected $fillable =['descripcion','created_at']; 
}
