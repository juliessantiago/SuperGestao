<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');/*Ao receber como segundo parâmetro uma string, o Laravel
entende que estamos passando um controlador e uma action*/ 
//nome da classe @ nome do método 
Route::get('/sobrenos', 'SobrenosController@sobre');
Route::get('/contato', 'ContatoController@contato');