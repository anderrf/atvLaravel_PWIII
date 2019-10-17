<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIMC(){
        $nome = $_GET['nome'];
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $imc = ($peso / ($altura * $altura));
        echo '<h1>' . $nome . ', seu IMC é de: ' . $imc . '</h1>';
    }
    
    public function somar(){
        $val1 = $_GET['val1'];
        $val2 = $_GET['val2'];
        $soma = ($val1 + $val2);
        return '<h2>Resultado da soma de ' . $val1 . ' e ' . $val2 . ' é: ' . $soma.'</h2>';
    }
    
    public function getQuadrado(){
        $numero = $_GET['numero'];
        $quadrado = ($numero * $numero);
        echo '<h1>O quadrado de ' . $numero . ' é: ' .$quadrado.'</h1>';
    }
}

