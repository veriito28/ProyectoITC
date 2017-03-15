<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
      protected $fillable = ['nombre','url_plan_estudio'];

    public function carreras()
    {
    	return $this->belongsToMany(Carrera::class,'carrera_materias');
    }
}
