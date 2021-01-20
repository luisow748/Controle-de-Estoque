<?php

use Illuminate\Support\Facades\Auth;

$user = Auth::user();
?>
@extends('layout_bemvindo')
    @section('title')

    @endsection

    @section('header')

    @endsection

    @section('content')
    <div class="grid-container">
        <div class="c1"> {{-- Coluna Esquerda --}}
            <div class='index-container shadow rounded'>
                <center>
                    Coluna esquerda
                </center>

                <div class="index-item mb-4">



                </div>



            </div>

        </div>

        <div class="c2"> {{-- Coluna MEIO --}}
        <!-- Page Content  -->
            @if(isset($cat))
                @include('site.items.list-items-from-category')
            @else
                @include('site.index.welcome', ['user'=> $user])
            @endif

        </div>

        <div class="c3"> {{-- Coluna Direita --}}

            {{-- @include('site.index.column_categories') --}}

        </div>
    </div>





        @endsection
