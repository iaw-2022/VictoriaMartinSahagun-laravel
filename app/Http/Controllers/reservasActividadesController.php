<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\ReservasActividades;
use App\Models\Cabana;
use App\Models\Actividad;

class reservasActividadesController extends Controller
{
    public function index(){
        $reservas_actividades = ReservasActividades::all();
        $cabanas_array = [];
        $actividades_array = [];
        foreach($reservas_actividades as $reserva){
            $cabanas_array = Arr::add($cabanas_array, $reserva->cabana_id, Cabana::find($reserva->cabana_id)->numero);
            $actividades_array = Arr::add($actividades_array, $reserva->actividad_id, Actividad::find($reserva->actividad_id)->nombre);
        }
        return view('reservas_actividades.index')->with('reservas_actividades',$reservas_actividades)->with('cabanas',$cabanas_array)->with('actividades',$actividades_array);
    }

    public function create(){
        return view('reservas_actividades.create');
    }

    public function store(Request $request){
        return redirect('/reservas/actividades');
    }
}
