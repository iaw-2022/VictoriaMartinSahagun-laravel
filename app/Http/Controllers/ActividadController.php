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

    public function edit($id){
        $actividad = Actividad::find($id);
        return view('actividad.edit')->with('actividad',$actividad);
    }
/**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        $actividad = Actividad::find($id);
        return view('actividad.show')->with('actividad',$actividad);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id)
    {
        return redirect('/actividades');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        //
    }
}
