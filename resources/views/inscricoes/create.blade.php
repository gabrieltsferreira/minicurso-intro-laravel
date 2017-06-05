@extends('main')

@section('conteudo')

<h1>Criando uma nova inscrição</h1>

<div class="form-container col-xs-12">
    {{ Form::open(['url' => '/inscricoes']) }}

        @include('inscricoes.campos-form', ['textoBotao' => 'Criar'])

    {{ Form::close() }}
</div>



@endsection
