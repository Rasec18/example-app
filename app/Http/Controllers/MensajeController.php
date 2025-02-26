<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function create() 
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        dd( $request->all(), $request->email );
        //dd ('si llego a esta ruta');
        //validar formulario
        //guardar a d8
        //redirigir 
    }
}
