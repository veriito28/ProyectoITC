<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{

  /**
     * Variable tipo arregle donde se almacenas los atributos del modelo que pueden 
     * modificados por el usuario
     * 
     * @var $fillable
     * 
     **/
    protected $fillable = ['nombre','url_reticula'];
  /**
     * materias
     * metodo del modelo que se enlaza con el modelo de materias para 
     * un mejor entendimiento de las relaciones
     *
     * Esto es una relacion de muchos a muchos por medio de la tabla carrera_materias
     * @return Relacion con las materias
     **/
    public function materias()
    {
    	return $this->belongsToMany(Materia::class,'carrera_materias');
    }
}
