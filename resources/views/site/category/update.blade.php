@extends('layout')

@section('title')
    Formulário Edição Categoria
@endsection

@section('header')
    Editar Categoria
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="description" class="">Descrição</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <button class="btn btn-primary">Atualizar Categoria</button>
    </form>
@endsection
