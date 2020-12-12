<?php include 'assets/src/variaveis.php';
$url = $var['caminho_absoluto'];
?>

@extends('layout')
    @section('title')
        Itens do Estoque
    @endsection

@section('header')

@endsection

@section('content')
    <h3>Relação de Itens:</h3>
    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <a href="{{route('form_create_item')}}" class="btn btn-dark mb-2">Adicionar novo Item</a>

    <table class="table table-sm table-bordered bg-white rounded shadow table-hover text-center">
        <thead class="thead-dark">
        <tr>
            <th style="width: 30px" scope="col">Cód.</th>
            <th style="width: 200px" scope="col">Nome do item</th>
            <th style="width: 80px" scope="col">Qde atual</th>
            <th style="width: 100px" scope="col">Qde mínima</th>
            <th style="width: 120px" scope="col">Custo</th>
            <th style="width: 120px" scope="col">Preço de Venda</th>
            <th style="width: 150px" scope="col">Categoria</th>

            <th style="width: 180px" scope="col" class="justify-center">Ações</th>
        </tr>
        </thead>
        <tbody>

    @foreach($items as $item)
        <tr>
            <th scope="row"><button class="btn btn-sm btn-secondary rounded">
                    <a  style="color: whitesmoke" href="{{ $url }}items/mostrar/{{$item->id}}"> {{$item->id}} </a> </button> </th>
            <td class="text-left"> <a  style="color: #2C3033" href="{{ $url }}items/mostrar/{{$item->id}}">
                    {{$item->name}} </a></td>
            <td>{{$item->qty}}</td>
            <td>{{$item->minimum_qty}}</td>
            <td>{{$item->paid_price}}</td>
            <td>{{$item->new_price}}</td>
            <td>{{$item->category}}</td>

            <td>
                <div class="form-row justify-content-center">
                    <form method="post" action="{{$url}}items/{{$item->id}}"
                          onsubmit="return confirm('Tem certeza que deseja ' +
                              'remover {{addslashes($item->name)}}?')">
                        @csrf
                        @method('DELETE')
                        <button id="lixeira" class="btn btn-danger btn-sm m-1"> <i class="far fa-trash-alt "></i>  </button>
                    </form>
                        <a href="{{ $url }}items/mostrar/{{$item->id}}">
                            <button id="acessItem" class="btn btn-dark btn-sm m-1">
                                <i class="fas fa-angle-double-right "></i>
                            </button>
                        </a>
                        <a href="{{ $url }}items/editar/{{$item->id}}">
                            <button id="editItem" class="btn btn-success btn-sm m-1">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                            </button>
                        </a>
                    <button id="dropItem" class="btn btn-info btn-sm m-1">
                        <i class="fas fa-address-book"></i>
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
        </tbody>

    </table>

    <a href="{{route('form_create_item')}}" class="btn btn-dark mb-2">Adicionar novo Item</a>

@endsection

