<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();
    ?>
@extends('layout')
    @section('title')

    @endsection

    @section('header')

    @endsection

    @section('content')

<div class="grid-container">
    <div class="c1">
        <div class='index-container shadow rounded'>

            <a href="{{route('form_create_item')}}"
                class="btn btn-secondary mb-3 btn-shadow btn-block">Adicionar novo Item </a>

            <div class="index-item">


                <livewire:contact-search-bar />
                {{-- Coluna 01 <br>
                Coluna 01 <br>
                Coluna 01 <br>
                Coluna 01 <br>
                Coluna 01 <br>
                Coluna 01 <br> --}}
            </div>
        </div>

    </div>
    <div class="c2">

        <!-- Page Content  -->
        <div class='index-container shadow rounded'>

                <div class="" >

                    {{-- @if(Auth::user())
                        <h3>Bem vindo, {{ $user->name }}.</h3>
                    @endif --}}
                            {{-- <h6>Este é o aplicativo {{config('variaveis.nome_app')}}</h6>
                            <p>Com ele, você gerencia todo o estoque da sua empresa, de maneira automatizada, organizada e produtiva!</p>


                        <a href="/funcionalidades" class="btn btn-info btn-block mb-4">Conheça as funcionalidades!</a> --}}
                        {{-- <div class='index-item'> --}}

                        {{-- </div> --}}
                </div>

                    {{-- <div class='index-item'>
                        <h3>Controle Inteligente do Estoque</h3>
                        <h6>Monitore a temperatura do local onde está o estoque</h6>
                        <p>Com a integração a sensores controlados por Arduino, é possível enviar dados para o sistema em tempo real.<br>
                        Dessa forma, você verifica se o ambiente está em condições de manter os itens</p>
                        <a href="/funcionalidades" class="btn btn-warning btn-block mb-4">Saiba mais!</a>
                    </div>
                    <div class='index-item'>
                        <h3>Classificação dos Itens do Estoque</h3>
                        <h6><i class='fa fa-chevron-right'></i> Setor <i class='fa fa-chevron-right'>
                            </i> Categoria <i class='fa fa-chevron-right'></i> Seu Item
                            <i class='fa fa-chevron-right'></i> Características do Item</h6>
                            <p>Classificados de maneira organizada, seus items são facilmente encontrados e
                                selecionados mediante critérios diversos, com "marcadores" específicos.<br>
                                Dessa forma, você pode selecionar somente os itens que atendam a determinado critério,
                                como por exemplo, os que estão próximos do vencimento.
                            </p>
                            <a href="/funcionalidades" class="btn btn-success btn-block mb-4">Confira todas as possibilidades.</a>
                    </div> --}}


            <div class="d-flex flex-row flex-wrap index-container rounded">

                @foreach($category as $cat)
                <div class="index-item">

                    <livewire:items-list :category="$cat"/>
                    {{-- @include('site.index.column_categories') --}}

                </div>
                @endforeach

            </div>



        </div>
    </div>

    <div class="c3">


               @include('site.index.column_actions')


    </div>
</div>





    @endsection






