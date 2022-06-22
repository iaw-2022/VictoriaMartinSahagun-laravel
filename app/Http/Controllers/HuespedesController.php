<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Huespedes;

class HuespedesController extends Controller
{

    public function index(){
        $huespedes = Huespedes::paginate(5);
        return view('huesped.index')->with('huespedes',$huespedes);
    }

    public function create(){
        return view('huesped.create');
    }

    public function store(Request $request){
        $request->validate([
            'id_huesped' => 'required|int',
            'numero' => 'required|int',
            'email' => 'required'
        ]);

        $huesped = new Huespedes();

        $huesped->id_huesped = $request->get('id_huesped');
        $huesped->nombre = $request->get('numero');
        $huesped->email = $request->get('email');

        $huesped->save();

        return redirect('/huespedes');
    }

    public function edit($id){
        $huesped = Huespedes::find($id);
        return view('huesped.edit')->with('huesped',$huesped);
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
            'id_huesped' => 'required|int',
            'numero' => 'required|int',
            'email' => 'required'
        ]);

        $huesped = Huespedes::find($id);

        $huesped->id_huesped = $request->get('id_huesped');
        $huesped->nombre = $request->get('numero');
        $huesped->email = $request->get('email');

        $huesped->save();

        return redirect('/huespedes');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        $huesped = Huespedes::find($id);

        $huesped->delete();

        return redirect('/huespedes');
    }
}
