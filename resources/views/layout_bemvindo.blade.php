<?php
include 'assets/src/includes.php';

$url = $var['caminho_absoluto'];

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('site.structures.head2')

<body>

{{-- @include('site.structures.header') --}}
@include('site.structures.header_bemvindo')

@yield('header')



<!-- Page Content  -->
        <div id="content" class="p-2 pt-5">


            @yield('content')

        </div>


@include('site.structures.scripts')

</body>
</html>
