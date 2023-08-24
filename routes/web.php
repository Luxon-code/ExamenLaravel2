<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('registrarEquipos');
});
Route::get('/sorteo', function () {
    return view('sorteo');
});


Route::resource('equipos',EquipoController::class)->only('index','store','show','update','destroy');
