<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //editar
    public function edit(string $id){
        echo "Aquí se edita el usuario $id";
    }

    public function index(){
        echo "Aquí se lista todos los usuarios";
    }

    public function create(){
        echo "Aqui hay un formulario para crear el usuario";
    }

    public function store(Request $request){
        echo "Aqui se guarda el usuario";
    }

    public function show(string $id){
        echo "Aquí se muestra el usuario $id";
    }

    public function update(Request $request, string $id){
        echo "Aqui se actualiza el usuario $id tras editar";
    }

    public function destroy(string $id){
        echo "Aqui se destruye el usuario $id";
    }

    public function primeraAccion(string $name, string $nick): View{
        return view('welcome3', compact('name', 'nick'));
    }
    public function segundaAccion(string $name): View{
        return view('welcome2', compact('name'));
    }
}
