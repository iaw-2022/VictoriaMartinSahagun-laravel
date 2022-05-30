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


Route::get('/', 'App\Http\Controllers\welcomeController@index')->middleware(['auth']);

Route::resource('/actividades', 'App\Http\Controllers\ActividadController')->middleware(['auth']);

Route::resource('/comidas', 'App\Http\Controllers\ComidaController')->middleware(['auth']);

Route::resource('/cabanas', 'App\Http\Controllers\CabanaController')->middleware(['auth']);

Route::resource('/reservas/comidas', 'App\Http\Controllers\reservasComidasController')->middleware(['auth']);

Route::resource('/reservas/actividades', 'App\Http\Controllers\reservasActividadesController')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
