<?php

class Head
{

    public $head;
    public $var;

    public function __construct($var)
    {
        $this->var = $var;
        $this->setHead($var);

    }

    public function setHead($var)
    {
        $caminho_absoluto = $var['caminho_absoluto'];
        $head = "<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content='Mark Otto, Jacob Thornton, and Bootstrap contributors'>
    <meta name='generator' content='Jekyll v4.1.1'>
    <title> ".$var['nome_app']."</title>
    <link rel=\"shortcut icon\" href=\"{$caminho_absoluto}icon.ico\" >

    <link rel='canonical' href='https://getbootstrap.com/docs/4.5/examples/offcanvas/'>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <link rel='canonical' href='https://getbootstrap.com/docs/4.5/examples/floating-labels/'>
    <!-- Bootstrap core CSS -->
    <link href='".$caminho_absoluto."assets/dist/css/bootstrap.min.css' rel='stylesheet'>
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <link href='".$caminho_absoluto."assets/dist/css/font_awesome/all.css' rel='stylesheet'> <!--load all styles -->
    <link href='".$caminho_absoluto."assets/dist/css/items/items.css' rel='stylesheet'>
    <link href='".$caminho_absoluto."assets/dist/css/sidebar4/style.css' rel='stylesheet'> <!-- Sidebar 4 -->
    <link href='{$caminho_absoluto}offcanvas.css' rel='stylesheet'>
    <!--<link href='{$caminho_absoluto}assets/dist/css/floating-labels.css' rel='stylesheet'> -->

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


        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/




    </style>
    <!-- Custom styles for this template -->



</head>";
        $this->head = $head;
    }
    public function getHead()
    {
        return $this->head;
    }


}


