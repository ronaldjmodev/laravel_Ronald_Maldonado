<?php
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CarTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Hola Mundo';
});


Route::resource('/cursos', CursoController::class);
Route::resource('/car_types', CarTypeController::class);
