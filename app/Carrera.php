<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{

    protected $fillable = ['nombre','url_reticula'];

    public function materias()
    {
    	return $this->belongsToMany(Materia::class,'carrera_materias');
    }
}
