<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /**
     * Variable tipo arregle donde se almacenas los atributos del modelo que pueden 
     * modificados por el usuario
     * 
     * @var $fillable
     * 
     **/
    protected $fillable = ['nombre','url_plan_estudio'];


    /**
     * carrera
     * metodo del modelo que se enlaza con el modelo de carreras para 
     * un mejor entendimiento de las relaciones
     *
     * Esto es una relacion de muchos a muchos por medio de la tabla carrera_materias
     * @return Relacion con las carreras
     **/
    public function carreras()
    {
    	return $this->belongsToMany(Carrera::class,'carrera_materias');
    }
}
