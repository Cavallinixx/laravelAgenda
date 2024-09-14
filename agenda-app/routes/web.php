<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas/index');
});
/*É A MESMA COISA*/
Route::get('/index', function () {
    return view('paginas/index');
});

//Defindo os caminhos
Route::get('/cadastrar', function () {
    return view('paginas/cadastrar');
});

Route::get('/consultar', function () {
    return view('paginas/consultar');
});

//As rotas utilizando o padrao MVC (MODEL,VIEW,CONTROL)
Route::get('/cadastrar',[\App\Http\Controllers\registrarAtividadeController::class, 'index']);
Route::get('/cadastrar/salvar',[\App\Http\Controllers\registrarAtividadeController::class,'store']);
Route::get('/consultar',[\App\Http\Controllers\registrarAtividadeController::class, 'consultar']);