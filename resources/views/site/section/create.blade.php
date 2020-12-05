@extends('layout')

@section('title')
    Formulário adição Seções
@endsection

@section('header')

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
        <div class="bg-light border rounded p-2 m-2">
            <h4>Adicionar Seção: </h4>
            <div class="form-row align-items-center mb-4">
                <div class="col-4 border  rounded m-1">
                    <label for="name" class="">Nome da Seção</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="col-6 border  rounded m-1">
                    <label for="description" class="">Descrição</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
            </div>
            <div class="form-row align-items-center mb-4">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
@endsection
