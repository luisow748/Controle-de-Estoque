<?php
include 'assets/src/includes.php';
?>

    <!doctype html>
<html lang="pt-BR">
@include('site.structures.head')

<body>
@include('site.structures.header')


@yield('header')




<!-- Vertical navbar -->
<div class="wrapper d-flex align-items-stretch">

@include('site.structures.admin.sidebar')

<!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4"></h2>

        @yield('content')

    </div>
</div>


<?php

$script = new Script();
$script->setScript($var);
echo $script->getScripts();

?>

</body>
</html>


