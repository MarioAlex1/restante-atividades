@extends('layouts.app')
@section('title', 'Produtos')
@section('content')
    <h1>Produtos</h1>

    @if(!$nome && !$preco)
        <p>Nenhum produto informado.</p>
    @else
        <p><strong>Nome:</strong> {{ $nome }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($preco, 2, ',', '.') }}</p>
    @endif
@endsection