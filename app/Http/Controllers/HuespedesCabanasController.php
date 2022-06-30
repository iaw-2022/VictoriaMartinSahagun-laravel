<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\HuespedCabana;
use App\Models\Cabana;
use App\Models\Huespedes;

class HuespedesCabanasController extends Controller
{
    public function index(){
        $hospedados = HuespedCabana::paginate(5);
        $cabanas_array = [];
        $huespedes_array = [];
        foreach($hospedados as $hospedado){
            $cabanas_array = Arr::add($cabanas_array, $hospedado->cabana_id, Cabana::find($hospedado->cabana_id)->numero);
            $huespedes_array = Arr::add($huespedes_array, $hospedado->huesped_id, Huespedes::find($hospedado->huesped_id)->email);
        }
        return view('hospedado.index')->with('hospedados',$hospedados)->with('cabanas',$cabanas_array)->with('huespedes',$huespedes_array);
    }

    public function create(){
        $cabanas = Cabana::all();
        $huespedes = Huespedes::all();
        return view('hospedado.create')->with('cabanas',$cabanas)->with('huespedes',$huespedes);
    }

    public function store(Request $request){
        $request->validate([
            'numero' => 'required|int',
            'email' => 'required|string',
        ]);

        $hospedado = new HuespedCabana();

        $hospedado->cabana_id = $request->get('numero');
        $hospedado->huesped_id = $request->get('email');

        $hospedado->save();

        return redirect('/hospedados');
    }

    public function edit($id){
        $cabanas = Cabana::all();
        $huespedes = Huespedes::all();
        $hospedado = HuespedCabana::find($id);
        $cabana = Cabana::find($hospedado->cabana_id);
        $huesped = Huespedes::find($hospedado->huesped_id); 
        return view('hospedado.edit')->with('hospedado',$hospedado)->with('cabana',$cabana)->with('huesped',$huesped)
        ->with('cabanas',$cabanas)->with('huespedes',$huespedes);
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
            'email' => 'required|string',
        ]);

        $hospedado = HuespedCabana::find($id);

        $hospedado->cabana_id = $request->get('numero');
        $hospedado->huesped_id = $request->get('email');
        
        $hospedado->save();

        return redirect('/hospedados');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        $hospedado = HuespedCabana::find($id);

        $hospedado->delete();

        return redirect('/hospedados');
    }
}
