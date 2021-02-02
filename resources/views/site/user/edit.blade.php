@extends('layout')

@section('title')
    Atualização de Usuário
@endsection

@section('content')

    @include('site.validation.errors')
    <div class='add-item'>
        <h5>Atualização do Usuário:</h5>
    <form method="POST" action="{{ route('store_updated_users') }}">
        @csrf
        <label for="name" value="">Nome</label>
        <input id="name" class="" type="text" name="name" value="{{$user->name}}"> <br>

        <label for="email" value="">E-mail</label>
        <input id="email" class="" type="text" name="email" value="{{$user->email}}"> <br>
        <input type="text" hidden name="id" value="{{$user->id}}">

        <button class="btn btn-primary mb-2 mt-3 btn-shadow">Atualizar usuário</button>

    </form>



    </div>
@endsection
