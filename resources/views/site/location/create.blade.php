@extends('layout')

@section('title')
    Formulário Locais
@endsection

@section('content')

@include('site.validation.errors')

        <div class="formulario border rounded p-2 m-2">
            <h4>
                @if(isset($loc))
                    <form method="post" action="/locais/editar/{{$loc->id}}">
                        @csrf
                        Editar
                    <input hidden type="text" class="form-control"
                    name="id" id="id" value='{{$loc->id}}'>
                @else
                    <form method="post" action='{{route('store_location')}}'>
                        @csrf
                        Adicionar
                @endif
                    Local: </h4>
            <div class="form-row align-items-center mb-4">

                <div class="col-4 border  rounded m-1">
                    <label for="name" class="">Nome</label>
                    <input type="text" class="form-control"
                    name="name" id="name" value="{{$loc->name ?? ''}}">
                </div>


                <div class="col-4 border  rounded m-1">
                    <label for="address" class="">Endereço</label>
                    <input type='text' class="form-control" name="address" id="address"
                    value='{{$loc->address ?? ''}}'>
                </div>

            </div>
            <div class="form-row rounded m-1">
                <label for="email" class="">E-mail</label>
                <input type="text" class="form-control" name="email" id="email"
                 value='{{$loc->email ?? ''}}'>

                <label for="contact" class="">Contato</label>
                <input type="text" class="form-control" name="contact" id="contact"
                 value='{{$loc->contact ?? ''}}'>

                 <label for="phone" class="">Telefone</label>
                <input type="text" class="form-control" name="phone" id="phone"
                 value='{{$loc->phone ?? ''}}'>
            </div>
            <button class="btn btn-primary">
                @if(isset($loc))
                    Atualizar
                @else
                    Adicionar
                @endif
                    Local
            </button>
        </div>
    </form>
@endsection
