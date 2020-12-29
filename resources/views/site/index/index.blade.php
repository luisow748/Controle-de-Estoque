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

            @include('site.structures.buttons.btn-add-item')

            <div class="index-item">

                <livewire:contact-search-bar />

            </div>
        </div>

    </div>

    <div class="c2">
    <!-- Page Content  -->
        @if(isset($cat))
            @include('site.items.list-items-from-category')
        @else
            @include('site.index.welcome')
        @endif

    </div>

    <div class="c3">

        @include('site.index.column_categories')

    </div>
</div>





    @endsection






