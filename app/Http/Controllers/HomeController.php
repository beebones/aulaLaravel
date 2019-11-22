<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function viewHome(){
        // $usuario = new Usuario();
        // $listaUsuarios = $usuario->all();
        //dd($listaUsuarios);

        $listaUsuarios = Usuario::all();

        return view('home',["usuarios"=>$listaUsuarios]);
    }

    public function request(Request $request, $id=0) {
        if($id==0) {
            echo "Passa algo";
        }
    }

    public function exibirFormulario() {
        return view('formulario');
    }

    public function cadastrarFormulario(Request $request) {
        dd($request->nomeUsuario);
    }
}
