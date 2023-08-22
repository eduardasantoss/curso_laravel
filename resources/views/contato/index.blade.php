
@extends('layout.site') <!--caminho da classe site.blade-->

@section('titulo','Contatos')
@section('conteudo') <!--variável que recebe tudo que esta dentro da section!-->

<h3>Esse é a view Index</h3>
@foreach($contatos as $contato)
<p>{{ $contato->nome }}</p>
<p>{{ $contato->tel }}</p>
@endforeach
@foreach($profissao as $prof)
<p>{{ $prof->cargo}}</p>
<p>{{ $prof->formacao}}</p>
@endforeach
@endsection











