<?php include 'assets/src/variaveis.php';
/*require_once 'assets/classes/estrutura/Sidebar.class.php';
$s = new Sidebar($var);
$sidebar = $s->getSidebar();*/
$url = $var['caminho_absoluto'];
use App\Models\Item;
?>

@extends('layout')
    @section('title')
       Test
    @endsection

@section('header')

@endsection

@section('content')
<!-- Vertical navbar -->
<h3>Items por Categoria:</h3>
<div class="d-flex flex-row flex-wrap mb-3 index-container">

    @foreach($category as $cat)
    <div class="index-item">
        <livewire:items-list :category="$cat"/>

        {{-- @foreach(Item::where('category_id', $cat->id_category)
->orderBy('id')->get() as $item)

            <a href="{{ $url }}items/mostrar/{{$item->id}}">
                <button id="acessItem" class="btn btn-info btn-sm mb-1">
                    <i class="fas fa-angle-double-right "></i>
                </button>
            </a>
            <a href="{{ $url }}items/editar/{{$item->id}}">
                <button id="editItem" class="btn btn-success btn-sm mb-1">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                </button>
            </a>
            {{$item->name}} - Qde: {{$item->qty}} <br>
        @endforeach --}}


    </div>
    @endforeach

    <div class="index-item">
        {{-- <livewire:items-list :category="$cat"/> --}}
    </div>
    <div class="index-item"></div>
  </div>


{{-- <div class="wrapper d-flex align-items-stretch"> --}}
    <div class="index-container p-3 mb-5 rounded" style="background-color: #EBEBEB">
    <!-- Page Content  -->
        <div class='flex-container'>
            <div id="content" class="p-4 p-md-5 pt-5">
                <h2 class="mb-4">h2 fsdgfgfdgdf</h2>
                <p class='index-item'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class='index-item'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

{{-- </div> --}}


@endsection
