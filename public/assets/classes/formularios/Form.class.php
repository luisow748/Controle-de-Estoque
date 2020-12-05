<?php


class Form
{
    public $formulario;
    private $tipoFormulario;
    public function setForm($tipo)
    {
        $this->tipoFormulario = $tipo;
        $this->criaFormulario();
        return $this->formulario;
    }
    public function criaFormulario()
    {
        include_once 'assets/src/formularios/formularios.php';
        if($this->tipoFormulario == "include_items")
        {
            $this->formulario = $cadastro_itens;
            

        }
         
    }
}

?>