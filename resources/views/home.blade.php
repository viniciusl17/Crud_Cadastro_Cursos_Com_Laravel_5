@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h5 class="center">Cursos</h5>
        <div class="row ">
            @foreach ($cursos as $curso)
                <div class="col s10 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset($curso->imagem) }}">
                        </div>
                        <div class="card-content">
                            <h4>{{ $curso->titulo }}</h4>
                            <p>{{ $curso->descricao }}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Mais Detalhes...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
