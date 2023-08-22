
@extends('layout.site') <!--caminho da classe site.blade-->

@section('titulo','Cursos')


@section('conteudo') <!--variável que recebe tudo que esta dentro da section!-->
<div class = "container">
    <h3 class="center">Editando Curso</h3>
    <div class="row"> <!--criar uma linha (row) em um layout de grade!-->
        <form class="" action="{{route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
            <!--cria uma verificação de token-->
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            @include('admin.cursos._form')  <!--Esse include vai trazer os campos de entrada de nosso formulário-->
            <button class="btn deep-orange">Atualizar</button>
        </form>
       
    </div>
  
</div>
@endsection











