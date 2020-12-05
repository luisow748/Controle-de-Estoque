<?php
include 'assets/src/includes.php';
?>
    <!doctype html>
<html lang="pt-BR">
@include('site.structures.head')

<body class="bg-light">

@include('site.structures.header_full')

<main role='main' class='container'>
    <div class='my-3 p-3 bg-white rounded shadow-sm'>
        <div class='w3-container'>

            <h3>@yield('header')</h3>

            @yield('content')
        </div>
    </div>
</main>

<?php
$script = new Script();
$script->setScript($var);
echo $script->getScripts();

?>

</body>
</html>
