
@extends('layout')

    @section('title')
        Formulário adição itens
    @endsection

@section('header')

@endsection

@section('content')
    <h3>Novo Item:</h3>

{{--    Inclui a view que mostra os erros--}}
    @include('site.validation.errors')


    <div class="shadow p-3 mb-5 rounded d-flex flex-wrap" style="background-color: #EBEBEB">
        <form method="post" class="" id="cria_item" name="cria_item" action="{{ route('store_item') }}">
            <fieldset>
            <p><h4>Digite os dados do item a ser inserido:</h4></p>
            @csrf
            <div class="d-flex">
                <div class=" ">
                    <label for="name" class="">Nome:</label>
                    <input type="text" placeholder="Nome" class="form-control" name="name" id="name">

                </div>
                <div class=" ">
                    <label for="description" class="">Descrição:</label>
                    <input type="text" placeholder="Descrição do item" class="form-control" name="description" id="description">

                </div>
            </div>

            <div class="d-flex flex-wrap d-md-inline-flex p-2">

                <div class="mr-2 d-flex ">
                    <label for="qty" class="p-2">Quantidade </label>
                    <input type="number" placeholder="Quantidade"class="form-control" name="qty" value="1" id="qty">
                </div>

                <div class="mr-2 d-flex ">
                    <label for="minimum_qty" class="p-2">Qde mín. </label>
                    <input type="number" placeholder="Qde Mínima"class="form-control" name="minimum_qty" value="1" id="minimum_qty">
                </div>

                <div class="mr-2 d-flex ">
                    <label for="paid_price" class="p-2">Preço</label>
                    <input type="text" placeholder="Preço pago (R$)"
                           class="form-control" name="paid_price"  id="paid_price">
                </div>

                <div class="mr-2 d-flex ">
                    <label for="new_price" class="p-2">Preço Atual </label>
                    <input type="text" placeholder="Preço atualizado (R$)"
                           class="form-control" name="new_price" id="new_price">
                </div>

            </div>

            <div class="">

{{--Se estiver vindo um Model Categoria, não seleciona seção nem categoria --}}
                @if(isset($categoria))
                    <p> O item será incluído na categoria {{ $categoria->name }}.</p>
                    <input hidden name="category" value="{{ $categoria->name }}">
                    <input hidden name="category_id" value="{{ $categoria->id_category }}">
                @else
{{--                    Se não estiver vindo, mostra os formulários para selecionar a seção e categoria--}}

                    @include('site.structures.forms.select_section')

                    @include('site.structures.forms.select_category')
                @endif

            </div>


{{--                    <div class="form-inline mb-4">--}}
{{--                            <label for="photo_name" class="mr-4">Foto do Item: </label>--}}
{{--                            <input type="file" placeholder="" class="form-control" name="photo_name" id="photo_name">--}}
{{--                    </div>--}}
            <button type="submit" class="btn btn-primary">Adicionar Item</button>
            </fieldset>
    </form>

        <article>



        </article>

    </div>

    <div id="contentLoading">
        <div id="loading"></div>
    </div>



@endsection

@section('scripts')


@endsection


