
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


    <div class="shadow p-3 mb-5 bg-light rounded">
        <form method="post" class="" id="cria_item" name="cria_item" action="{{ route('store_item') }}">
            <fieldset>
            <p><h4>Digite os dados do item a ser inserido:</h4></p>
            @csrf
            <div class="form-row align-items-center mb-4">
                <div class="col-4 border  rounded m-1">
                    <label for="name" class="">Nome:</label>
                    <input type="text" placeholder="Nome" class="form-control" name="name" id="name">

                </div>
                <div class="col-6 border  rounded m-1">
                    <label for="description" class="">Descrição:</label>
                    <input type="text" placeholder="Descrição do item" class="form-control" name="description" id="description">

                </div>
            </div>

            <div class="form-row align-items-center mb-4 ">

                <div class="col-2 border  rounded m-1">
                    <label for="qty" class="">Quantidade</label>
                    <input type="number" placeholder="Quantidade"class="form-control" name="qty" value="1" id="qty">
                </div>

                <div class="col-2 border  rounded m-1">
                    <label for="minimum_qty" class="">Quantidade mínima</label>
                    <input type="number" placeholder="Qde Mínima"class="form-control" name="minimum_qty" value="1" id="minimum_qty">
                </div>

                <div class="col-3 border  rounded m-1">
                    <label for="paid_price" class="">Preço pago</label>
                    <input type="text" placeholder="Preço pago (R$)"
                           class="form-control" name="paid_price"  id="paid_price">
                </div>

                <div class="col-3 border  rounded m-1">
                    <label for="new_price" class="">Preço Atualizado</label>
                    <input type="text" placeholder="Preço atualizado (R$)"
                           class="form-control" name="new_price" id="new_price">
                </div>

            </div>

            <div class="form-row align-items-center mb-4 m-1 text-center">

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


                    <div class="form-inline mb-4">
                            <label for="photo_name" class="mr-4">Foto do Item: </label>
                            <input type="file" placeholder="" class="form-control" name="photo_name" id="photo_name">
                    </div>
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


