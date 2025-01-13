<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome1');
});

// Esta ruta toma dos parametros y los pasa a welcome2, welcome2 esta hecho de manera que cuente tanto como saludo1 name y saludo1 name y nick

Route::get('/saludo1/{name?}/{nick?}', function($name = '', $nick = '') {
    return view('welcome2', compact('name', 'nick'));
});
Route::get('/saludo1', fn() => view('welcome2'))->name('primerSaludo');

Route::fallback(fn() => view('404'));

Route::put('/usuarios/{id}/edit', function($id) {
    echo "Hola, usuario $id";
})->where('id', '[0-9]');

Route::any('saludoTodos', function(){
    echo "Hola desde ANY";
});

Route::prefix('saludo2')->group(function(){
    Route::get('/', fn() => view('welcome2'));
    Route::get('/uno', fn() => view('welcome2',['name' => 'uno']));
    Route::get('/{id}', function($id){
        echo "Hola, $id!";
    })->where('id', '[0-9]{3}');
    Route::get('/{nombre}', function($nombre){
        echo "$nombre tiene 4 letras";
    })->where('nombre', '[0-9A-Za-z]{4}');
});

Route::redirect('/saludoUno', '/saludo1');
Route::redirect('/saludoDos', '/saludo2');
Route::get('/otroSaludoUno', fn() => redirect()->route('primerSaludo', []));
//Route::redirect('/otroSaludoUno', route('primerSaludo'));
