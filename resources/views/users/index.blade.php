@extends('adminlte::page')

@section('title', 'Usuários Cadastrados')

@section('content_header')
    <h1>Usuários Cadastrados</h1>
@stop

@section('content')
    {{--<a href="{{ route('users.create') }}">Novo Usuário</a>  criando botao--}} 
    <div class="card">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')

    {{ $dataTable->scripts() }}
@stop
