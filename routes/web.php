<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;
use illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

//Fromulario unica funcion
Route::get('/contact',[MensajeController::class, 'create']);
//guardar el contacto despues de hacer el formulario
Route::post('crear-contacto', [MensajeController::class, 'store']);
