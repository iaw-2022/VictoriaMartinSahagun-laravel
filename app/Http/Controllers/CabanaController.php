<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabana;

class CabanaController extends Controller
{
    public function __construct()
    {
        $this->middleware('modificacion.cabanas');
    }

    public function index(){
        $cabanas = Cabana::paginate(5);
        return view('cabana.index')->with('cabanas',$cabanas);
    }

    public function create(){
        return view('cabana.create');
    }

    public function store(Request $request){
        $request->validate([
            'numero' => 'required|int',
            'capacidad' => 'required|int|min:1'
        ]);

        $cabana = new Cabana();

        $cabana->numero = $request->get('numero');
        $cabana->capacidad = $request->get('capacidad');

        $cabana->save();

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
    public function update(Request $request, $id)
    {
        $request->validate([
            'numero' => 'required|int',
            'capacidad' => 'required|int',
        ]);

        $cabana = Cabana::find($id);

        $cabana->numero = $request->get('numero');
        $cabana->capacidad = $request->get('capacidad');

        $cabana->save();

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
        $cabana = Cabana::find($id);

        $cabana->delete();

        return redirect('/cabanas');
    }
}
