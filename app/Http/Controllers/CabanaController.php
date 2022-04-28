<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabana;

class CabanaController extends Controller
{
    public function index(){
        $cabanas = Cabana::all();
        return view('cabana.index')->with('cabanas',$cabanas);
    }

    public function create(){
        return view('cabana.create');
    }

    public function store(Request $request){
       /*
        $cabanas = new Cabana();

        $cabanas->numero = $request->get('numero');
        $cabanas->capacidad = $request->get('capacidad');

        $cabanas->save();
        */
        return redirect('/cabanas');
    }
}
