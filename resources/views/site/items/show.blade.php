<?php
include 'assets/src/includes.php';

$url = $var['caminho_absoluto'];

?>

@extends('layout')
@section('title')

@endsection

@section('header')

@endsection

@section('content')

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#show">Visualizar Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#edit">Editar Item</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" data-toggle="tab" href="#" tabindex="-1" >Disabled</a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <div class="card-body">

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade show active" id="show">

                    @include('site.items.form_show')
                </div>

                <div class="tab-pane fade" id="edit">

                    @include('site.items.form_edit')
                </div>

            </div>

{{--            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
            <p><a href="{{$url}}items" class="btn btn-primary">Voltar à lista de Items </a></p>
        </div>
    </div>

















@endsection
