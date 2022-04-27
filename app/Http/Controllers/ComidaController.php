<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comida;

class ComidaController extends Controller
{
    public function index(){
        $datos = Comida::all();
        echo $datos;
    }
}
