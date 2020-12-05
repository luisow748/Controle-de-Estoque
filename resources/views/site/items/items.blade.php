<!doctype html>
<html lang="en">

<?php
include_once 'assets/src/includes.php';

$h = new Head($section, $var);
echo $h->getHead();
?>

<body class="bg-light">
    <?php
    $header = new Header($section, $var);
    echo $header->getHeader();

        $main = new Main();
        $main->setSection($section);
        //$main->setMain();
        //echo $main->getMain();
       // echo "</main>";

        $script = new Script();
        $script->setScript($section);
        echo $script->getScripts();

    ?>


</body>

</html>
