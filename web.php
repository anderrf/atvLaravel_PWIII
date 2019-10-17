<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return '<h1>Olá mundo!</h1>';
});

Route::group(['prefix' => 'Conjunto'], function(){
    
    Route::get('/rota1', function () {
        return '<h1 style="color: turquoise">Esta é a primeira rota!</h1>';
    });
    
    Route::get('/rota2', function(){
        return '<h2 style="color: firebrick">Esta é a segunda rota!</h2>';
    });
    
    Route::get('/rota3', function(){
        return '<h3 style="color: gainsboro">Esta é a terceira rota!</h3>'; 
    });
     
});
*/

Route::group(['prefix' => 'atv'], function()
{
    
    Route::get('/r1', function(){
        echo 
        '<form action="imc" method="GET">
            <div class="row" style="margin: 20px">
                <div class=col-md-12>
                    <label>Nome:</label>
                    <input type="text" name="nome">
                </div>
            </div>
            <div class="row" style="margin: 20px">
                <div class=col-md-12>
                    <label>Altura (em m):</label>
                    <input type="number" name="altura" step="any">
                </div>
            </div>
            <div class="row" style="margin: 20px">
                <div class=col-md-12>
                    <label>Peso (em kg):</label>
                    <input type="number" name="peso" step="any">
                </div>
            </div>
            <div class="row" style="margin: 20px">
                <div class=col-md-12>
                    <label>Idade:</label>
                    <input type="number" name="idade">
                </div>
            </div>
            <div class="row" style="margin: 20px">
                <div class=col-md-12>
                    <label>Sexo:</label>
                    <input type="radio" name="sexo" value="masculino">Masculino
                    <input type="radio" name="sexo" value="feminino">Feminino
                </div>
            </div>
            <div class="row" style="margin: 20px">
                <div class=col-md-12>
                    <button type="submit">Calcular</button>
                </div>
            </div>
        </form>
        ';
        
    });
    
    Route::get('imc', 'Controller@getIMC');
    
    Route::get('/r2', function(){
        echo
        '<form action="somar" method="GET">
        <div>
            <label>Digite o primeiro número:</label>
            <input type="number" name="val1">
        </div>
        <div>
            <label>Digite o segundo número:</label>
            <input type="number" name="val2">
        </div>
        <div>
            <button type="submit">Calcular</button>
        </div>
        </form>';
    });
    
    Route::get('somar', 'Controller@somar');
    
    Route::get('/r3', function(){
        echo
        '<div class="row">
            <form action="quadrado" method="get">
                <label>Digite aqui um número e veja o seu quadrado:</label>
                <input type="number" name="numero">
                <button type="submit">Elevar</button>
            </form>
        </div>';
    });
    
    
    Route::get('quadrado', 'Controller@getQuadrado');
    
});

