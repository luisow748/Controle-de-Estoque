<?php

class Script
{
    private $scripts;

    function setScript($var)

    {

        $this->scripts = "

        <!-- Tippy -->
        <script src='https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js'></script>
        <script src='https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js'></script>
       <!-- <script type='text/javascript' src=\"{$var['caminho_absoluto']}assets/dist/js/jquery-2.1.0.js\"></script> -->
        <script>

          tippy('#lixeira', {
            content: 'Excluir',
          });
          tippy('#acessCat', {
            content: 'Acessar Categoria',
          });
           tippy('#acessItem', {
            content: 'Acessar Item',
          });
           tippy('#editItem', {
            content: 'Editar Item',
          });
          tippy('#addItem', {
            content: 'Adicionar item na categoria',
          });
          tippy('#dropItem', {
            content: 'Dar baixa',
          });
           tippy('#addSubCat', {
            content: 'Adicionar Subcategoria',
          });
            tippy('#addSubCat', {
            content: 'Adicionar Subcategoria',
          });
        </script>


        <script src='https://unpkg.com/@popperjs/core@2'></script>



        <script src='{$var['caminho_absoluto']}assets/dist/js/jquery351.js'></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' ></script>




        <!-- Sidebar -->
        <script src='$var[caminho_absoluto]assets/dist/js/sidebar4/main.js'></script>

        <script src='$var[caminho_absoluto]assets/dist/js/sidebar4/popper.js'></script>

        <!-- <script src='$var[caminho_absoluto]assets/dist/js/sidebar4/jquery.min.js'></script> -->


        <script src='$var[caminho_absoluto]assets/dist/js/bootstrap.bundle.min.js'></script>


        <script src='$var[caminho_absoluto]offcanvas.js'></script>



      <!-- <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script> -->
        <!-- Development -->







        ";
    }
    function getScripts()
    {
        return $this->scripts;
    }

}

$cdn = "


";
?>
