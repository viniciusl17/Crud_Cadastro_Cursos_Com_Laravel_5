@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Novo Curso</h3>
        <div class="row"> 
            <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.cursos._form')
                <button class="btn deep-orange">
                    <i class="material-icons center ">done</i>                    
                </button>
            </form>           
        </div>        
    </div>
@endsection