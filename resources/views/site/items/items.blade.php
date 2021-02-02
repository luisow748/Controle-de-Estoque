<?php
use App\Models\Item;
?>

@extends('layout_sidebar')
    @section('title')

    @endsection

@section('header')

@endsection

@section('content')
<!-- Vertical navbar -->


@include('site.structures.buttons.btn-add-item')
@include('site.structures.buttons.btn-index')

    <div class="d-flex flex-row flex-wrap mb-3 index-container">

        {{-- @foreach($category as $cat) --}}
        <div class="index-item">
            <h5>Últimos itens cadastrados</h5>

            <livewire:items-list />

        </div>
        {{-- @endforeach --}}

    </div>

<a href="{{route('form_create_item')}}" class="btn btn-secondary ml-2 mb-2 btn-shadow">Adicionar novo Item </a>
@endsection

