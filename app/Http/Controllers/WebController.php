<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;

class WebController extends Controller
{
    protected $carreras;
    function __construct(Carrera $carreras)
    {
    	$this->carreras = $carreras;
    }
    public function index()
    {
    	$carreras = $this->carreras->get();
    	return view('main',compact('carreras'));
    }
}
