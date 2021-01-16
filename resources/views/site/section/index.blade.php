<?php include 'assets/src/variaveis.php';
$url = $var['caminho_absoluto'];
?>

@extends('layout')
@section('title')
    Seções
@endsection

@section('content')
    <h3>Relação de Seções:</h3>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

        <table class="table bg-white rounded shadow table-hover overflow-auto">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome da Seção</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
        @foreach($section as $cat)
            <tr>
                <th scope="row"> {{$cat->id_section}} </th>
                <td>{{$cat->name}}</td>
                <td>{{$cat->description}}</td>
                <td>
                    <div class="form-row">
                        <form method="post" action="/secoes/{{$cat->id_section}}"
                              onsubmit="return confirm('Tem certeza que deseja ' +
                                  'remover {{addslashes($cat->name)}}?')">
                            @csrf
                            @method('DELETE')

                                    <button id="lixeira" class="btn btn-danger btn-sm m-1" >
                                        <i class="far fa-trash-alt "></i> </button>

                        </form>


                            <button id="acessSection" class="btn btn-dark btn-sm m-1">
                                <i class="fas fa-angle-double-right "></i> </button>

                        <form method="post" action="/categorias/criar/{{$cat->id_section}}">
                            @csrf
                            <button id="addCat" class="btn btn-info btn-sm m-1" type='submit' >
                            <i class="fas fa-plus"></i> </button>
                        </form>

                        <a href="/secoes/editar/{{$cat->id_section}}">

                        <button id="editSection" class="btn btn-success btn-sm m-1" >
                            <i class="fa fa-database"></i></button>
                        </a>

                    </div>
                </td>
            </tr>
        @endforeach

            </tbody>
        </table>
    <a href="{{route('form_create_section')}}" class="btn btn-dark mb-2">Adicionar Seção</a>

    <!--</ul> -->
@endsection
