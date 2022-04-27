<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index(){
        $datos = Actividad::all();
        echo $datos;
    }
}
