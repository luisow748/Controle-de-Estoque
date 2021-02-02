@extends('layout')

@section('title')
    Usuário
@endsection

@section('content')

    @include('site.validation.errors')
    <div class='add-item'>
        <h5>Informações do Usuário:</h5>
        <p>Código: {{$user->id}} </p>
        <p>Nome: {{$user->name}} </p>
        <p>E-mail: {{$user->email}} </p>
        @include('site.structures.buttons.btn-index')
    </div>
@endsection
