
@extends('main')

@section('conteudo')

<h1>Editando uma inscrição</h1>

<div class="form-container col-xs-12">
    {{ Form::model($Inscricao, ['url' => url('inscricoes', $Inscricao), 'method' => 'PUT'] ) }}

        @include('inscricoes.campos-form', ['textoBotao' => 'Editar', 'Inscricao' => $Inscricao])

    {{ Form::close() }}
</div>



@endsection
