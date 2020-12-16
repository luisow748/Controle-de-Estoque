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



    <form method="post">
        @csrf
        <div class="bg-light border rounded p-2 m-2">
            <h4>
                @if(isset($cat))
                Editar
                <input hidden type="text" class="form-control"  name="id_category" id="id_category" value='{{$cat->id_category}}'>
                @else
                Adicionar
                @endif
                Categoria: </h4>
            <div class="form-row align-items-center mb-4">

                <div class="col-4 border  rounded m-1">
                    <label for="name" class="">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$cat->name ?? ''}}">
                </div>


                <div class="col-4 border  rounded m-1">
                    <label for="section_id" class="">Seção</label>
                    <select class="form-control" name="section_id" id="section_id">

                    @if(isset($section_selected)) <!-- Adic Cat com seção definida -->
                    <option selected value="{{$section_selected->id_section}}">{{$section_selected->name}}</option>
                    @elseif(isset($cat)) <!-- Atualizar Cat com seção cadastrada pré-selecionada -->
                        <option selected value="{{$cat->section_id}}">{{$cat->section_name}}</option>
                            @foreach($section as $section)
                            <option value="{{$section->id_section}}">{{$section->name}}</option>
                            @endforeach
                    @else <!-- Adic Cat com seção a escolher -->
                        @foreach($section as $section)
                            <option value="{{$section->id_section}}">{{$section->name}}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
                <input hidden type="text" class="form-control"  name="section_name" id="section_name" value='{{$cat->section_name ?? ''}}'>

            </div>
            <div class="form-row rounded m-1">
                <label for="description" class="">Descrição</label>
                <input type="text" class="form-control" name="description" id="description"
                 value='{{$cat->description ?? ''}}'>
            </div>
            <button class="btn btn-primary">
                @if(isset($cat))
                Atualizar
                @else
                Adicionar
                @endif
                Categoria
            </button>
        </div>
    </form>
@endsection
