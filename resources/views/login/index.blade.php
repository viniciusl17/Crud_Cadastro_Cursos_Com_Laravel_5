@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')


    <div class="container">
        <h5 class="center">Entrar no Sistema</h5>
        <div class="row"> 
            <form class="" action="{{route('site.login.entrar')}}" method="post">
                {{csrf_field()}}

                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="email" name="email">

                    <label>E-mail</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>

                <button class="btn deep-orange">Entrar</button>
            </form>           
        </div>        
    </div>


@endsection