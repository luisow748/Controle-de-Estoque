@extends('layout')

@section('title')
    Formulário Categorias
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

@if(isset($cat))
Edição
@endif

    <form method="post">
        @csrf
        <div class="bg-light border rounded p-2 m-2">
            <h4>Adicionar Categoria: </h4>
            <div class="form-row align-items-center mb-4">

                <div class="col-4 border  rounded m-1">
                    <label for="name" class="">Nome</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>


                <div class="col-4 border  rounded m-1">
                    <label for="section_id" class="">Seção</label>
                    <select class="form-control" name="section_id" id="section_id">
                        @foreach($section as $section)
                            <option value="{{$section->id_section}}">{{$section->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input hidden type="text" class="form-control" name="section_name" id="section_name">
            </div>
            <div class="form-row rounded m-1">
                <label for="description" class="">Descrição</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <button class="btn btn-primary">Adicionar Categoria</button>
        </div>
    </form>
@endsection
