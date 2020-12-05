<?php
include 'assets/src/includes.php';
?>

<!doctype html>
<html lang="pt-BR">
@include('site.structures.head')

<body>
@include('site.structures.header')


    @yield('header')


    @yield('content')

<?php

$script = new Script();
$script->setScript($var);
echo $script->getScripts();

?>

</body>
</html>

