<?php


class Main
{
    private $main;
    private $section;

    private $componentes;
    public $lista;
    private $main_layout;


    public function setSection($set)
    {
        $this->section = $set;
    }
    public function retornaListaPronta()
    {
        include_once 'assets/classes/estrutura/main/Lista.class.php';
        $this->lista = new Lista();
        return $this->lista->getList($this->section);
    }

    public function setMain()
    {
        include_once 'assets/classes/estrutura/main/Lista.class.php';
        include_once "assets/src/index/index_componentes.php";
        $this->main = $openMain; //Abre a seção Main
        switch ($this->section) {
            case 'index':
                $this->main .= $visao_geral;
                $this->main .= $this->retornaListaPronta();
                $this->main .= $ultimos_produtos_cadastrados;
                $this->main .= $produtos_ultimas_24h;

                break;
            case 'include_items':
                include_once 'assets/classes/formularios/Form.class.php';
                $form = new Form();
                $content_superior = $form->setForm($this->section);
                $this->setMainLayout($content_superior);
                $this->main .= $this->getMainLayout();
                break;
            case 'show_items':
                $lista_items = new Lista();
                $content_superior = $lista_items->getList('');
                $this->setMainLayout($content_superior);
                $this->main .= $this->getMainLayout();
            break;
            case 'reports':
                include_once 'assets/classes/entities/Report.class.php';
                $rep = new Report();
                $rep->setReport(); // Seta o Relatório
                $this->main .= $rep->getReport(); //Adiciona o relatório ao corpo do 'Main'
            break;
        }
        $this->main .= $closeMain; //Fecha a seção Main
    }
    public function getMain()
    {
        return $this->main;
    }
    public function setMainLayout($content_superior)
    {

        $this->main_layout = "
        <div class='grid-container'>
        <div class='margem_esquerda'></div>
        <div class='margem_direita'></div>
        <div class='centro_superior'>" . $content_superior . "</div>
        <div class='centro_inferior'></div>
        </div>
        ";
    }
    public function getMainLayout()
    {
        return $this->main_layout;
    }
}
