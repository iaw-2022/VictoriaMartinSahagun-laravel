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

        $comida = new Comida();

        $comida->nombre = $request->get('nombre');
        $comida->descripcion = $request->get('descripcion');
        $comida->dia = $request->get('dia');
        $comida->tipo = $request->get('tipo');
        $comida->img = '/img/default.jpg';

        $comida->save();

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
        $comida = Comida::find($id);
        return view('comida.show')->with('comida',$comida);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id)
    {
        $comida = Comida::find($id);

        $comida->nombre = $request->get('nombre');
        $comida->descripcion = $request->get('descripcion');
        $comida->dia = $request->get('dia');
        $comida->tipo = $request->get('tipo');
        $comida->img = '/img/default.jpg';

        $comida->save();

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
