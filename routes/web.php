<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\PeliculaController;
use App\Models\Director;

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

Route::get('/', function () {
  //  return view('welcome');
   return view('presentacion');
  //return redirect(route('director.index',1));
});

Route::controller(DirectorController::class)->group( function(){
    Route::get('director/create','create')->name('director.create');
   Route::post('director/store','store')->name('director.store');
    Route::get('director/{sw}','index')->name('director.index');
    Route::get('director/buscar/{director}','buscar')->name('director.buscar');
   Route::post('director/update/{director}','update')->name('director.update');
    Route::get('director/destroy/{director}','destroy')->name('director.destroy');  
    Route::get('director/restore/{director}','restore')->name('director.restore');
});

Route::controller(PeliculaController::class)->group( function(){
  Route::get('pelicula/create','create')->name('pelicula.create');
 Route::post('pelicula/store','store')->name('pelicula.store');
  Route::get('pelicula/{sw}','index')->name('pelicula.index');
  Route::get('pelicula/buscar/{pelicula}','buscar')->name('pelicula.buscar');
 Route::post('pelicula/update/{pelicula}','update')->name('pelicula.update');
  Route::get('pelicula/destroy/{pelicula}','destroy')->name('pelicula.destroy');  
  Route::get('pelicula/restore/{pelicula}','restore')->name('pelicula.restore');
});
/*
Route::controller(PacienteController::class)->group(function (){
    Route::get('paciente/create','create')->name('paciente.create');
   Route::post('paciente/store','store')->name('paciente.store');
    Route::get('paciente/{sw}','index')->name('paciente.index');
    Route::get('paciente/buscar/{paciente}','buscar')->name('paciente.buscar');
   Route::post('paciente/update/{paciente}','update')->name('paciente.update');  
   Route::get ('paciente/destroy/{paciente}','destroy')->name('paciente.destroy');  
   Route::get ('paciente/restore/{paciente}','restore')->name('paciente.restore'); 
});
*/