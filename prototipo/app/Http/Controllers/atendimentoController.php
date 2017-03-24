<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class atendimentoController extends Controller
{
    function index (){
        return view ("atendimento");
    }
}
