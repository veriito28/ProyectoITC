<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{

  
    /**
     * Muestra la pantalla de visualizacion de una carrera seleccionada.
     *
     * El usuario le manda como parametro el id de la carrera
     *
     * En $carrera se almacena la carrera correspondiente al id de carrera mandado
     * como parametro
     *
     * Como en todo momento se debe mostrar la barra lateral entonces 
     * se obtienen todas las carreras y se despliegan
     * @param  \App\Carrera  $carrera
     * @return Vista carrera
     */
    public function show(Carrera $carrera)
    {
        $carreras = Carrera::get();
        return view('carrera',compact('carreras','carrera'));
    }
}
