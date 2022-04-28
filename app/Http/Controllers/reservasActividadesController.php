<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\ReservasActividades;
use App\Models\Cabana;
use App\Models\Actividad;

class reservasActividadesController extends Controller
{
    public function index(){
        $reservas_actividades = ReservasActividades::all();
        $cabanas_array = [];
        $actividades_array = [];
        foreach($reservas_actividades as $reserva){
            $cabanas_array = Arr::add($cabanas_array, $reserva->cabana_id, Cabana::find($reserva->cabana_id)->numero);
            $actividades_array = Arr::add($actividades_array, $reserva->actividad_id, Actividad::find($reserva->actividad_id)->nombre);
        }
        return view('reservas_actividades.index')->with('reservas_actividades',$reservas_actividades)->with('cabanas',$cabanas_array)->with('actividades',$actividades_array);
    }

    public function create(){
        $cabanas = Cabana::all();
        $actividades = Actividad::all();
        return view('reservas_actividades.create')->with('cabanas',$cabanas)->with('actividades',$actividades);
    }

    public function store(Request $request){
        return redirect('/reservas/actividades');
    }

    public function edit($id){
        $cabanas = Cabana::all();
        $actividades = Actividad::all();
        $reserva = ReservasActividades::find($id);
        $cabana = Cabana::find($reserva->cabana_id);
        $actividad = Actividad::find($reserva->actividad_id); 
        return view('reservas_actividades.edit')->with('reserva',$reserva)->with('cabana',$cabana)->with('actividad',$actividad)
        ->with('cabanas',$cabanas)->with('actividades',$actividades);
    }

/**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id)
    {
        return redirect('/reservas/actividades');
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
