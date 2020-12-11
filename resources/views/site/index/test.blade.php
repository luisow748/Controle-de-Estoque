<?php include 'assets/src/variaveis.php';
/*require_once 'assets/classes/estrutura/Sidebar.class.php';
$s = new Sidebar($var);
$sidebar = $s->getSidebar();*/
$url = $var['caminho_absoluto'];
?>

@extends('layout')
    @section('title')
       Test
    @endsection

@section('header')

@endsection

@section('content')
<!-- Vertical navbar -->

<div class="d-flex flex-row flex-wrap mb-3 index-container">
    @foreach($category as $cat)
    <div class="index-item">

        <h5>Itens da Categoria:</h5> <h6>{{$cat->name}}</h6>
        Flex item 2dsadsadasdasdasdasdasd
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
    </div>
    @endforeach

    <div class="index-item">Flex item 2dsadsadasdasdasdasdasd
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
        dsadasdasd <br> dsadasdasd <br>dsadasdasd <br> asasdffs
    </div>
    <div class="index-item">Flex item 3</div>
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
