<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'App\Http\Controllers\welcomeController@index');

Route::resource('/actividades', 'App\Http\Controllers\actividadController');

Route::resource('/comidas', 'App\Http\Controllers\comidaController');

Route::resource('/cabanas', 'App\Http\Controllers\cabanaController');

Route::resource('/reservas/comidas', 'App\Http\Controllers\reservasComidasController');

Route::resource('/reservas/actividades', 'App\Http\Controllers\reservasActividadesController');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
