<?php
include 'assets/src/includes.php';

$url = $var['caminho_absoluto'];

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('site.structures.head2')

<body>

@include('site.structures.header')

@yield('header')

<!-- Vertical navbar -->
<div class="wrapper d-flex align-items-stretch mt-4">

    @include('site.structures.admin.sidebar')

<!-- Page Content  -->
        <div id="content" class="p-md-5 pt-5">

            @if(!empty($message))
            <div class="alert alert-success">
                {{$message}}
            </div>
            @endif
            @yield('content')

        </div>

</div>
@include('site.structures.scripts')

</body>
</html>
