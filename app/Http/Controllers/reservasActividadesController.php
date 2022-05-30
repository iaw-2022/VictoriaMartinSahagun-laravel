<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
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
        $request->validate([
            'numero' => 'required|int',
            'nombre' => 'required',
            'cantidad_personas' => 'required|int|min:1',
        ]);

        $reserva_actividad = new ReservasActividades();

        $reserva_actividad->cabana_id = $request->get('numero');
        $reserva_actividad->actividad_id = $request->get('nombre');
        $reserva_actividad->cantidad_personas = $request->get('cantidad_personas');

        $reservas = DB::table('reservas_actividades')
                    ->where('cabana_id','=',$reserva_actividad->cabana_id)
                    ->where('actividad_id','=',$reserva_actividad->actividad_id)
                    ->get();
        if($reservas->isEmpty()){
            $reserva_actividad->save();
        }else{
            throw ValidationException::withMessages(['cantidad_personas'=>'There is already a reservation for this activity.']);
        }

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
    public function update(Request $request, $id)
    {
        $request->validate([
            'numero' => 'required|int',
            'nombre' => 'required',
            'cantidad_personas' => 'required|int|min:1',
        ]);

        $reserva_actividad = ReservasActividades::find($id);

        $reserva_actividad->cabana_id = $request->get('numero');
        $reserva_actividad->actividad_id = $request->get('nombre');
        $reserva_actividad->cantidad_personas = $request->get('cantidad_personas');

        $reservas = DB::table('reservas_actividades')
                    ->where('cabana_id','=',$reserva_actividad->cabana_id)
                    ->where('actividad_id','=',$reserva_actividad->actividad_id)
                    ->where('id','!=',$id)
                    ->get();
        if($reservas->isEmpty()){
            $reserva_actividad->save();
        }else{
            throw ValidationException::withMessages(['cantidad_personas'=>'There is already a reservation for this activity.']);
        }

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
        $reserva = ReservasActividades::find($id);

        $reserva->delete();

        return redirect('/reservas/actividades');
    }
}
