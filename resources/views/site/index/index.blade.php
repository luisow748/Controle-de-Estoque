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

            </div>
        </div>

    </div>

    <div class="c2">
        <!-- Page Content  -->
        <div class='index-container shadow rounded'>

Categoria Selecionada

            {{-- <div class="d-flex flex-row flex-wrap index-container rounded">

                @foreach($category as $cat)
                <div class="index-item">

                    <livewire:items-list :category="$cat"/>

                </div>
                @endforeach

            </div> --}}



        </div>
    </div>

    <div class="c3">

               @include('site.index.column_categories')

    </div>
</div>





    @endsection






