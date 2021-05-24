<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //dentro de um controlador, os métodos são chamados de actions
    public function principal(){
        echo ('Bem vindo ao curso, testando controller!'); 
    }
}
