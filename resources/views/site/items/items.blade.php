<?php
use App\Models\Item;
?>

@extends('layout_sidebar')
    @section('title')
       Test
    @endsection

@section('header')

@endsection



@section('content')
<!-- Vertical navbar -->



<h3>Items por Categoria:</h3>


@include('site.structures.buttons.btn-add-item')
@include('site.structures.buttons.btn-index')

    <div class="d-flex flex-row flex-wrap mb-3 index-container">

        @foreach($category as $cat)
        <div class="index-item">

            <livewire:items-list :category="$cat"/>

        </div>
        @endforeach


        {{-- <div class="index-item"></div> --}}
    </div>


{{-- <div class="wrapper d-flex align-items-stretch"> --}}


{{-- </div> --}}
<a href="{{route('form_create_item')}}" class="btn btn-secondary ml-2 mb-2 btn-shadow">Adicionar novo Item </a>
@endsection

