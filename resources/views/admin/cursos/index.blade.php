@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h5 class="center">Listagem de Cursos</h5>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->titulo }}</td>
                            <td>{{ $registro->descricao }}</td>
                            <td><img height="80" src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}" /></td>
                            <td>{{ $registro->publicado }}</td>
                            <td>
                                <a class="btn-floating btn-large waves-effect green accent-4" href="{{ route('admin.cursos.editar', $registro->id) }}">
                                    <i class="material-icons center">create</i>
                                </a>
                                <a class="btn-floating btn-large waves-effect yellow darken-3"
                                    href="{{ route('admin.cursos.deletar', $registro->id) }}">
                                    <i class="material-icons center">delete_forever</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">            
            <a class="btn-floating btn-large waves-effect waves-light green accent-4" href="{{ route('admin.cursos.adicionar') }}"><i class="material-icons">add</i></a>
        </div>
    </div>
@endsection

