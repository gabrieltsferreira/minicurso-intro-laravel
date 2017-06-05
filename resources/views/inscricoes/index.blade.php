@extends('main')

@section('conteudo')

<ul class="list-group">

@forelse ($inscricoes as $Inscricao)
    <li class="list-group-item">
        {{ $Inscricao->nome }}  -  {{  $Inscricao->email }}
    </li>
    @empty
    <li class="list-group-item">
        Nenhum registro encontrado
    </li>
@endforelse

</ul>

@endsection
