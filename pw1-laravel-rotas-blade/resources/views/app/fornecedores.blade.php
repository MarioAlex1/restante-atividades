@extends('layouts.app')
@section('title', 'Fornecedores')
@section('content')

<h1>Informações do Fornecedor</h1>

<p>Empresa: {{ $dados['nome'] }}</p>

<p>Categoria: {{ $dados['categoria'] }}</p>

@if($dados['status'] == 'ativo')
    <p>Status: <strong>Ativo</strong></p>
@else
    <p>Status: <strong>Inativo</strong></p>
@endif
@endsection