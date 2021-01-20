<?php
//$asset = asset('assets/src/variaveis.php');
//include "$asset";
$caminho_absoluto = '/';
//
?>
<head>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>

{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title> {{config('variaveis.nome_app')}} </title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    @livewireStyles
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    <link rel='shortcut icon' href="{{asset('icon.ico')}}">
    <link href='{{ asset('assets/dist/css/font_awesome/all.css') }}' rel='stylesheet'> <!--load all styles -->

    {{-- <link rel='canonical' href='https://getbootstrap.com/docs/4.5/examples/offcanvas/'> --}}
{{--    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>--}}
    <!-- <link rel='canonical' href='https://getbootstrap.com/docs/4.5/examples/floating-labels/'> -->
    <!-- Bootstrap core CSS -->

    {{-- <link href='{{ asset('assets/dist/css/bootstrap.css') }}' rel='stylesheet'> --}}


    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>

    <link rel='stylesheet' href='{{asset('assets/dist/css/items/estruturas.css')}}' >

    <link rel='stylesheet' href='{{asset('assets/dist/css/sidebar4/style.css')}}'> <!-- Sidebar 4 -->
    <link rel='stylesheet' href='{{asset('offcanvas.css')}}'>
    <link rel='stylesheet' href='{{asset('assets/dist/css/responsivo.css')}}'>
    <link rel="stylesheet" href="{{asset('assets/dist/css/items/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/items/add-items.css')}}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    <style type="text/css">
        #pesquisaTeste{
            width:500px;
        }
        #form_pesquisa{
            margin-top:50px;
        }
    </style>
 <script type="text/javascript" src='{{asset('assets/dist/js/jquery-2.1.0.js')}}'></script>



</head>
