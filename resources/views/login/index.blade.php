
@extends('layout.site') <!--caminho da classe site.blade-->

@section('titulo','Cursos')


@section('conteudo') <!--variável que recebe tudo que esta dentro da section!-->
<div class = "container">
    <h3 class="center">Entrar no sistema</h3>
    <div class="row"> <!--criar uma linha (row) em um layout de grade!-->
        <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
            <input type="text" name="email" >
            <label>Email</label>
        </div>
        <div class="input-field">
            <input type="password" name="senha" >
            <label>Senha</label>
        </div>
           
            <button class="btn deep-orange">Entrar</button>
        </form>
       
    </div>
  
</div>
@endsection











