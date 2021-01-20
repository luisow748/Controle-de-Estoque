@extends('layout')

@section('title')
    Usuário
@endsection

@section('content')

    @include('site.validation.errors')
    <div class='add-item'>
        <h5>Usuário:{{$user_id}}</h5>
    </div>
@endsection
