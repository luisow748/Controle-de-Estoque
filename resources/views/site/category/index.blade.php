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
    <h3>Relação de Categorias:</h3>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

        <table class="table bg-white rounded shadow table-hover overflow-auto">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome da Categoria</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Seção</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
        @foreach($categories as $cat)
            <tr>
                <th scope="row"> {{$cat->id_category}} </th>
                <td>{{$cat->name}}</td>
                <td>{{$cat->description}}</td>
                <td>{{$cat->section_name}}</td>
                <td>
                    <div class="form-row">
                        <form method="post" action="/categorias/{{$cat->id_category}}"
                              onsubmit="return confirm('Tem certeza que deseja ' +
                                  'remover {{addslashes($cat->name)}}?')">
                            @csrf
                            @method('DELETE')

                                    <button id="lixeira" class="btn btn-danger btn-sm m-1" >
                                        <i class="far fa-trash-alt "></i> </button>

                        </form>


                            <button id="acessCat" class="btn btn-dark btn-sm m-1"> <i class="fas fa-angle-double-right "></i> </button>

                        <a href="/items/criar/{{$cat->id_category}}">
                            @csrf
                        <button id="addItem" class="btn btn-info btn-sm m-1" > <i class="fas fa-plus"></i> </button>
                        </a>
                        <a href='/categorias/editar/{{$cat->id_category}}'>
                            <button id="editCat" class="btn btn-success btn-sm m-1 "> <i class="fa fa-database"></i></button>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach

            </tbody>
        </table>
    <a href="{{route('form_create_category')}}" class="btn btn-dark mb-2">Adicionar Categoria</a>

    <!--</ul> -->
@endsection
