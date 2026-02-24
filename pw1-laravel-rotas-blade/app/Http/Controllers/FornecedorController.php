<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index($nome, $status, $categoria){
        // Criação do array
        $dados = [
            'nome' => $nome,
            'status' => $status,
            'categoria' => $categoria
        ];

        // Envio para a view
        return view('app.fornecedores', compact('dados'));
    }
}
