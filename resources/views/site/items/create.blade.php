
@extends('layout_sidebar')

    @section('title')
        Formulário adição itens
    @endsection

@section('header')

@endsection

@section('content')


{{--    Inclui a view que mostra os erros--}}
    @include('site.validation.errors')



    <div class="index-container ">
        <h5>Novo Item:</h5>

        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs p-2">

                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#geral">Dados do item</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#estoque">Estoque</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tags">Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#adicionais">Informações Adicionais</a>
                    </li>

                </ul>
            </div>

            <div class="card-body">

                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade show active" id="geral">

                        @include('site.items.form-insert-general')
                    </div>
                    <div class="tab-pane fade" id="estoque">

                        Estoque
                    </div>

                    <div class="tab-pane fade" id="tags">

                      Tags
                    </div>

                    <div class="tab-pane fade" id="adicionais">

                        Adicionais
                      </div>

                </div>







@endsection

@section('scripts')


@endsection


