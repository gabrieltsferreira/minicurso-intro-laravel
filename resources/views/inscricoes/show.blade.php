@extends('main')

@section('conteudo')

<h2>Mostrando dados de inscricao: </h2>

    <div>
        <p> <span>NOME: </span>  -  {{  $Inscricao->nome }} </p>
        <p> <span>EMAIL: </span>  -  {{  $Inscricao->email }} </p>
        <p> <span>DATA_CRIACAO: </span>  -  {{  $Inscricao->created_at }} </p>
        <p> <span>DATA_UPDATE: </span>  -  {{  $Inscricao->updated_at }} </p>
        <p> <a href="/inscricoes/{{ $Inscricao->id }}/edit" class="btn btn-primary">Editar</a> </p>
        <p>
            {{ Form::open(['url' => url('inscricoes', $Inscricao), 'method' => 'delete']) }}
                {{ Form::submit('Remover', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </p>
        <p> <a href="/inscricoes" class="btn btn-primary">Voltar para Listagem</a> </p>
    </div>

@endsection
