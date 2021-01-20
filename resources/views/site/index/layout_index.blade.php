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
    <div class="c1"> {{-- Coluna Esquerda --}}
        <div class='index-container shadow rounded'>
            <center>
                @include('site.structures.buttons.btn-add-item')
            </center>

            <div class="index-item mb-4">

                <livewire:contact-search-bar />

            </div>

        </div>

    </div>

    <div class="c2"> {{-- Coluna MEIO --}}
    <!-- Page Content  -->
        @yield('c2')

    </div>

    <div class="c3"> {{-- Coluna Direita --}}

        @include('site.index.column_categories')

    </div>
</div>





    @endsection
