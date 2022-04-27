<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabana;

class CabanaController extends Controller
{
    public function index(){
        $datos = Cabana::all();
        echo $datos;
    }
}
