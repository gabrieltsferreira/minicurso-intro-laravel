
<div class="col-xs-6">
{!! Form::label('nome',  'Nome' ) !!}
{!! Form::text('nome',  null, ['class'=> 'form-control'] ) !!}
</div>

<div class="col-xs-6">
{!! Form::label('email',  'Email' ) !!}
{!! Form::text('email', null, ['class'=> 'form-control'] ) !!}
</div>

<div class="col-xs-12 text-right mt-1">
{!! Form::submit($textoBotao, ['class' => 'btn btn-primary']) !!}
</div>
