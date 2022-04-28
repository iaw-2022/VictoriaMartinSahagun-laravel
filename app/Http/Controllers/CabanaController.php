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

    public function edit($id){
        $cabana = Cabana::find($id);
        return view('cabana.edit')->with('cabana',$cabana);
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
        return redirect('/cabanas');
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
