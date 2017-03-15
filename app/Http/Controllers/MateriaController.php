<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Carrera;
use Illuminate\Http\Request;
use Storage;

class MateriaController extends Controller
{
    function __construct(Carrera $carrera,Materia $materia)
    {
        $this->carrera = $carrera;
        $this->materia = $materia;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    //    $directory="documentos/";
    //     $carreras = Carrera::get();
    //     foreach ($carreras as $carrera) {
    //         $directoryPath = $directory.$carrera->id."/";
    //         $urls = \Storage::disk('local')->allFiles($directoryPath);
    //         foreach ($urls as $url) {
    //             $aux     = substr($url,0,strlen($url)-3);
    //             $name    = utf8_encode(str_replace([$directoryPath,'Programas IENR-2010-217/IENR-2010-217 ','IGEM-2009-201 ','FA IELC-2010-211 ','FA IELE-2010-209','FA ELE-2010-209 '],['','IENR ','IGEM ','IELC ','ELE ','IELE '],$aux));
    //             if ($materia = Materia::where('nombre',$name)->first()) {
    //                 $materia->carreras()->attach($carrera->id);
    //             }
    //         }
    //     }
    //     echo "termino";
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
