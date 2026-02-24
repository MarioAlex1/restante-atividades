<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = [
            ['nome' => 'João Silva', 'cidade' => 'Boa Viagem'],
            ['nome' => 'Maria Souza', 'cidade' => 'Fortaleza'],
            ['nome' => 'Pedro Lima', 'cidade' => 'Quixadá'],
            ['nome' => 'Davi Brito', 'cidade' => 'Senador Pompeu'],
        ];
        return view('app.clientes', compact('clientes'));
    }
}
