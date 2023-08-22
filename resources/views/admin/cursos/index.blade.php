
@extends('layout.site') <!--caminho da classe site.blade-->

@section('titulo','Cursos')


@section('conteudo') <!--variável que recebe tudo que esta dentro da section!-->
<div class = "container">
    <h3 class="center">Lista de Cursos</h3>
    <div class="row"> <!--criar uma linha (row) em um layout de grade!-->
       <table> <!--vamos definir a tabela de listagem de cursos!-->
            <thead>
                <!--O que vamos listar:  -->
                <tr>
                    <th>Id</th>   
                    <th>Titulo </th>   
                    <th>Descrição</th>   
                    <th>Imagem</th>   
                    <th>Publicado</th>   
                    <th>Ação</th>   
                </tr>
            </thead>
            <tbody>
                 <!-- foreach para trazer os registros que vamos listar:  -->
                 @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->descricao}}</td>
                        <td><img width="120" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                        <td>{{$registro->publicado}}</td>
                        <td>{{$registro->acao}}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                            <form action="{{ route('admin.cursos.deletar', $registro->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn deep-orange" type="submit">Deletar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
    <div class="row">
        <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
    </div>
</div>
@endsection











