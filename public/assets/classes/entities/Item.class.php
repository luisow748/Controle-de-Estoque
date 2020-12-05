<?php
include_once 'assets/classes/estrutura/main/Lista.class.php';
class Item 
{
    private $lista;
    public $section;
    public function showItems()
    {
        $this->lista = new Lista();
        $items_to_show = $this->lista->getList($this->section);
        return $items_to_show;
    }
    public function showIncludeItemsForm()
    {

    }
    public function showUpdateItemsForm()
    {

    }
    public function showDeleteItemsForm()
    {

    }
}