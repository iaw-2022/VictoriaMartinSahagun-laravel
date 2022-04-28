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

}
