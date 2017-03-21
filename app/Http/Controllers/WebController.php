<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;

class WebController extends Controller
{
    /**
     * index
     * Muestra la pantalla principal de la aplicacion
     * Obtiene todas las carreras del modelo 
     * Despues las envia a la plantilla para visualizarlas en la barra
     * lateral
     *
     * @return view
     **/
    public function index()
    {
    	$carreras = Carrera::get();
    	return view('main',compact('carreras'));
    }
}
