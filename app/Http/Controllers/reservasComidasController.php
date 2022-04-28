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
        return view('reservas_comidas.create');
    }

    public function store(Request $request){
        return redirect('/reservas/comidas');
    }

    public function edit($id){
        $reserva = ReservasComidas::find($id);
        $cabana = Cabana::find($reserva->cabana_id);
        $comida = Comida::find($reserva->comida_id); 
        return view('reservas_comidas.edit')->with('reserva',$reserva)->with('cabana',$cabana)->with('comida',$comida);
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
        //
    }
}
