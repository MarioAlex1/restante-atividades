@extends('layouts.app')
@section('title', 'Clientes')
@section('content')
    <h1>Clientes</h1>

    @if(empty($clientes))
        <p>Nenhum cliente encontrado.</p>
    @else
        <ul>
            @foreach($clientes as $cliente)
                <li>{{ $cliente['nome'] }} - {{ $cliente['cidade'] }}</li>
            @endforeach
        </ul>
    @endif
@endsection