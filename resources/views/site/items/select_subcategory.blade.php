<?php include 'assets/src/variaveis.php';
$url = $var['caminho_absoluto'];
?>

@extends('layout')
@section('title')
    Selecionar subcategoria
@endsection

@section('header')

@endsection


@section('content')
    <h3>Selecione em qual Subcategoria o item ficará armazenado:</h3>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="bg-light border rounded p-2 m-2">
            <div class="form-row align-items-center mb-4">
                <form method="post" action="{{route('form_create_item')}}" >
                    @csrf
                    <input hidden name="category" value="{{$category->name}}">
                    <input hidden name="category_id" value="{{$category->id_category}}">

                    <label for="subcategory_id">Subcategoria:</label>
                    <select class="form-control" name="subcategory_id" id="subcategory_id">

                        <option selected value="0"> Nenhuma subcategoria </option>
                    @foreach($subcategories as $subcat)
                        <option value="{{$subcat->id_category}}"> {{$subcat->name}} </option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
    </div>


    <!--</ul> -->
@endsection
