@extends('main')

@section('conteudo')

<h1>Listagem de todas as inscrições</h1>
<a href="{{ url('inscricoes/create') }}" class="btn btn-success">Criar nova</a>

<div class="col-xs-12 mt-2">
    <ul class="list-group">

    @forelse ($inscricoes as $Inscricao)
        <li class="list-group-item">
        <p>
            <span>NOME: </span>  -  {{  $Inscricao->nome }}
            <span>EMAIL: </span>  -  {{  $Inscricao->email }}
            <a href="{{ url('inscricoes', $Inscricao) }}">Mostrar mais</a>
        </p>
        </li>
        @empty
        <li class="list-group-item">
            Nenhum registro encontrado
        </li>
    @endforelse

    </ul>
</div>

@endsection
