<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comida;

class ComidaController extends Controller
{
    public function index(){
        $comidas = Comida::all();
        return view('comida.index')->with('comidas',$comidas);
    }

    public function create(){
        return view('comida.create');
    }

    public function store(Request $request){
       /*
        $comidas = new Comida();

        $comidas->nombre = $request->get('nombre');
        $comidas->descripcion = $request->get('descripcion');
        $comidas->dia = $request->get('dia');
        $comidas->comida(Alm/Cen) = $request->get('comida(Alm/Cen)');

        $comidas->save();
        */
        return redirect('/comidas');
    }

    public function edit($id){
        $comida = Comida::find($id);
        return view('comida.edit')->with('comida',$comida);
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
        return redirect('/comidas');
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
