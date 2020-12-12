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

    @include('site.structures.sidebar')

<!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4"></h2>

            @yield('content')

        </div>

</div>
@include('site.structures.scripts')

</body>
</html>

