<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Actividad;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('modificacion.actividades');
    }
    
    public function index(){
        $actividades = Actividad::paginate(5);
        return view('actividad.index')->with('actividades',$actividades);
    }

    public function create(){
        return view('actividad.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required',
            'dia' => 'required',
            'descripcion' => 'required',
            'horario' => 'required',
            'localizacion' => 'required|alpha',
            'img' => 'mimes:jpg,png,jpeg'
        ]);
        
        $actividad = new Actividad();

        $actividad->dia = $request->get('dia');
        $actividad->nombre = $request->get('nombre');
        $actividad->descripcion = $request->get('descripcion');
        $actividad->horario = $request->get('horario');
        $actividad->localizacion = $request->get('localizacion');
        
        if($request->hasfile('img')){
            $result = $request->file('img')->storeOnCloudinary('img');
            $actividad->img_id = $result->getPublicId();
            $actividad->img = $result->getSecurePath();
        }else{
            $actividad->img = 'https://res.cloudinary.com/proyectobalcon/image/upload/v1652636835/img/default_qr82e7.jpg';
            $actividad->img_id = 'img/default_qr82e7';
        }

        $actividad->save();
        
        return redirect('/actividades');
    }

    public function edit($id){
        $actividad = Actividad::find($id);
        return view('actividad.edit')->with('actividad',$actividad);
    }
/**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        $actividad = Actividad::find($id);
        return view('actividad.show')->with('actividad',$actividad);
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
            'horario' => 'required',
            'localizacion' => 'required',
            'img' => 'mimes:jpg,png,jpeg'
        ]);

        $actividad = Actividad::find($id);

        $actividad->dia = $request->get('dia');
        $actividad->nombre = $request->get('nombre');
        $actividad->descripcion = $request->get('descripcion');
        $actividad->horario = $request->get('horario');
        $actividad->localizacion = $request->get('localizacion');
        
        if($request->hasfile('img')){
            Cloudinary::destroy($actividad ->img_id);
            $result = $request->file('img')->storeOnCloudinary('img');
            $actividad->img_id = $result->getPublicId();
            $actividad->img = $result->getSecurePath();
        }
        
        $actividad->save();

        return redirect('/actividades');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        Cloudinary::destroy($actividad ->img_id);
        $actividad->delete();

        return redirect('/actividades');
    }
}
