@extends('layout.site')

@section('titulo', 'Contatos Lista')

@section('conteudo')

    <h2>View de Contatos Novo</h2>

    @foreach ($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->telefone }}</p>
        <p>{{ $contato->email }}</p>
    @endforeach

@endsection
