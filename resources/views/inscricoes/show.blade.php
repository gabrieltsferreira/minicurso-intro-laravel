@extends('main')

@section('conteudo')

<h2>Mostrando dados de inscricao: </h2>

    <div>
        <p> <span class="text-bold">NOME: </span>  -  {{  $Inscricao->nome }} </p>
        <p> <span class="text-bold">EMAIL: </span>  -  {{  $Inscricao->email }} </p>
        <p> <span class="text-bold">DATA_CRIACAO: </span>  -  {{  $Inscricao->created_at }} </p>
        <p> <span class="text-bold">DATA_UPDATE: </span>  -  {{  $Inscricao->updated_at }} </p>
    </div>

@endsection
