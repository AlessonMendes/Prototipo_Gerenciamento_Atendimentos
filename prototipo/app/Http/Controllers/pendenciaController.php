<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendenciaController extends Controller
{
    public function index(){
        return view('inicial');

    }
    public function formulario(){
        return view('formularioPendencia');

    }
}
