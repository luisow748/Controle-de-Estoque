<?php include 'assets/src/variaveis.php';
$url = $var['caminho_absoluto'];
?>

@extends('layout')
@section('title')
    Categorias
@endsection

@section('header')

@endsection


@section('content')
    <h3></h3>
    <p>Um item precisa estar em uma categoria ou subcategoria.</p>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="bg-light border rounded p-2 m-2">
        <div class="form-row align-items-center mb-4">
            <div class="col-4 border  rounded m-1">
                <form method="post" action="{{route('form_select_subcategory')}}">
                    @csrf
                    <label class="" for="category_id">
                        Selecione em qual Categoria o item ficará armazenado:</label>
                    <select class="form-control" name="category_id" id="category_id">
                            <option selected>Escolha uma opção...</option>


                        @foreach($categories as $category)

                            <option value="{{$category->id_category}}">{{$category->name}}</option>
{{--                            <option value="{{$section->id_section}}">{{$section->name}}</option>--}}
                        @endforeach

                    </select>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>





{{--    <a href="{{route('form_select_subcategory')}}" class="btn btn-dark mb-2">Selecionar Categoria</a>--}}

    <!--</ul> -->
@endsection
