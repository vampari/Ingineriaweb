<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carreras;
class alumnosController extends Controller
{
    public function registrar(){
        $carreras=Carreras::all();
        dd($carreras);
        return view('registrarAlumno', compact('carreras'));
    }
}
