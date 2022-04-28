<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index(){
        $actividades = Actividad::all();
        return view('actividad.index')->with('actividades',$actividades);
    }

    public function create(){
        return view('actividad.create');
    }

    public function store(Request $request){
       /*
        $actividades = new Actividad();

        $actividades->dia = $request->get('dia');
        $actividades->nombre = $request->get('nombre');
        $actividades->descripcion = $request->get('descripcion');
        $actividades->horario = $request->get('horario');
        $actividades->localizacion = $request->get('localizacion');

        $actividades->save();
        */
        return redirect('/actividades');
    }

}
