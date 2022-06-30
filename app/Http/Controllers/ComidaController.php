<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comida;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ComidaController extends Controller
{
    public function __construct()
    {
        $this->middleware('modificacion.comidas');
    }

    public function index(){
        $comidas = Comida::paginate(5);
        return view('comida.index')->with('comidas',$comidas);
    }

    public function create(){
        return view('comida.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'dia' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'img' => 'mimes:jpg,png,jpeg'
        ]);
        
        $comida = new Comida();

        $comida->nombre = $request->get('nombre');
        $comida->descripcion = $request->get('descripcion');
        $comida->dia = $request->get('dia');
        $comida->tipo = $request->get('tipo');
        
        if($request->hasfile('img')){
            $result = $request->file('img')->storeOnCloudinary('img');
            $comida->img_id = $result->getPublicId();
            $comida->img = $result->getSecurePath();
        }else{
            $comida->img = 'https://res.cloudinary.com/proyectobalcon/image/upload/v1656510823/img/default_l1jrdn.jpg';
            $comida->img_id = 'img/default_l1jrdn';
        }
        
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'dia' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'img' => 'mimes:jpg,png,jpeg'
        ]);

        $comida = Comida::find($id);

        $comida->nombre = $request->get('nombre');
        $comida->descripcion = $request->get('descripcion');
        $comida->dia = $request->get('dia');
        $comida->tipo = $request->get('tipo');
        
        if($request->hasfile('img')){
            Cloudinary::destroy($comida->img_id);
            $result = $request->file('img')->storeOnCloudinary('img');
            $comida->img_id = $result->getPublicId();
            $comida->img = $result->getSecurePath();
        }

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
        $comida = Comida::find($id);
        Cloudinary::destroy($comida->img_id);
        $comida->delete();

        return redirect('/comidas');
    }

}
