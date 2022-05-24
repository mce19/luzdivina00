<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NinoController;
use App\Http\Controllers\padreController;
use App\Http\Controllers\asistenciaController;
use App\Http\Controllers\grupoController;
use App\Http\Controllers\docenteController;
use App\Http\Controllers\nivelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

USAMOS LA PLANTILLA BLADE 

*/

Route::get('/', function () {
    return view('welcome_S');
    


});


Route::view('/ServicioComunal','ServicioComunal')->name('ServicioComunal');
Route::view('/matricula','matricula')->name('matricula');
Route::view('/donaciones','donaciones')->name('donaciones');
Route::view('/welcome_S','welcome_S')->name('inicio');


 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
 Route::resource('roles', RolController::class);
 Route::resource('usuarios', usuarioController::class);
 Route::resource('blogs', BlogController::class);
 Route::resource('ninos', NinoController::class);
 Route::resource('padres', PadreController::class);
 Route::resource('asistencias', AsistenciaController::class);
 Route::resource('grupos', GrupoController::class);
 Route::resource('docentes', DocenteController::class);
 Route::resource('niveles', NivelController::class);
    
});

