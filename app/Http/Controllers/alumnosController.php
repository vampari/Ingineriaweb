<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnosController extends Controller
{
    public function registrar(){
        return view('registrarAlumno');
    }
}
