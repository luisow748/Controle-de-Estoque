<?php include 'assets/src/variaveis.php';
$url = $var['caminho_absoluto'];
?>

@extends('layout')
@section('title')
    Locais
@endsection

@section('header')

@endsection

@section('content')

<h3>Relação de Locais:</h3>

    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

<div class="add-item">
    <table class="table bg-white rounded shadow table-hover overflow-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Contato</th>
                <th scope="col">Tel.</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
                @foreach($location as $cat)
                {{-- <div class="grid-container-add-items"> --}}
                    <tr>
                        <th scope="row"> {{$cat->id}} </th>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->address}}</td>
                        <td>{{$cat->contact}}</td>
                        <td>{{$cat->phone}}</td>
                        <td>
                            <div class="form-row">
                                <form method="post" action="/locais/{{$cat->id}}"
                                        onsubmit="return confirm('Tem certeza que deseja ' +
                                            'remover o local {{addslashes($cat->name)}}?')">
                                    @csrf
                                    @method('DELETE')
                                            <button id="deleteLocation" class="btn btn-danger btn-sm m-1" >
                                                <i class="far fa-trash-alt "></i> </button>
                                </form>

                                {{-- <form method="post" action="/locais/criar">
                                    @csrf
                                    <button id="addLocation" class="btn btn-info btn-sm m-1" type='submit' >
                                    <i class="fas fa-plus"></i> </button>
                                </form> --}}

                                <a href="/locais/editar/{{$cat->id}}"
                                    id='editLocation' class="btn btn-success btn-sm m-1">
                                    <i class="fa fa-database"></i>
                                </a>

                            </div>
                    </td>
                {{-- </div> --}}
                @endforeach
        </tbody>
    </table>

<a href="{{route('form_create_location')}}" class="btn btn-dark mb-2">Adicionar Local</a>
</div>

@endsection
