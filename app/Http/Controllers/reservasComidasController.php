<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\ReservasComidas;
use App\Models\Cabana;
use App\Models\Comida;

class reservasComidasController extends Controller
{
    public function index(){
        $reservas_comidas = ReservasComidas::all();
        $cabanas_array = [];
        $comidas_array = [];
        foreach($reservas_comidas as $reserva){
            $cabanas_array = Arr::add($cabanas_array, $reserva->cabana_id, Cabana::find($reserva->cabana_id)->numero);
            $comidas_array = Arr::add($comidas_array, $reserva->comida_id, Comida::find($reserva->comida_id)->nombre);
        }
        return view('reservas_comidas.index')->with('reservas_comidas',$reservas_comidas)->with('cabanas',$cabanas_array)->with('comidas',$comidas_array);
    }

    public function create(){
        $cabanas = Cabana::all();
        $comidas = Comida::all();
        return view('reservas_comidas.create')->with('cabanas',$cabanas)->with('comidas',$comidas);
    }

    public function store(Request $request){
        $request->validate([
            'numero' => 'required|int',
            'nombre' => 'required|alpha',
            'cantidad_personas' => 'required|int',
        ]);

        $reservas_comidas = new ReservasComidas();

        $reservas_comidas->cabana_id = $request->get('numero');
        $reservas_comidas->comida_id = $request->get('nombre');
        $reservas_comidas->cantidad_personas = $request->get('cantidad_personas');

        $reservas_comidas->save();

        return redirect('/reservas/comidas');
    }

    public function edit($id){
        $cabanas = Cabana::all();
        $comidas = Comida::all();
        $reserva = ReservasComidas::find($id);
        $cabana = Cabana::find($reserva->cabana_id);
        $comida = Comida::find($reserva->comida_id); 
        return view('reservas_comidas.edit')->with('reserva',$reserva)->with('cabana',$cabana)->with('comida',$comida)
        ->with('cabanas',$cabanas)->with('comidas',$comidas);
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
            'nombre' => 'required|alpha',
            'cantidad_personas' => 'required|int',
        ]);

        $reserva_comida = ReservasComidas::find($id);

        $reserva_comida->cabana_id = $request->get('numero');
        $reserva_comida->comida_id = $request->get('nombre');
        $reserva_comida->cantidad_personas = $request->get('cantidad_personas');

        $reserva_comida->save();

        return redirect('/reservas/comidas');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        $reserva= ReservasComidas::find($id);

        $reserva->delete();
        
        return redirect('/reservas/comidas');
    }
}
