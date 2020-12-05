<?php

use Illuminate\Support\Facades\DB;

class Lista
{
    protected $table;
    protected $lista_pronta;
    public $section;
    public $setor; // a definir

    public function setList()
    {
        $this->lista_pronta = "
        <div class='my-3 p-3 bg-white rounded shadow-sm'>
        <div class='w3-container'>
        <h2>Produtos / Setor</h2>
            <p>Situa&ccedil;&atilde;o dos Setores:</p>
                   <table class='w3-table-all w3-card-4'>
                   <tr>
                   <th>Nome do Item</th>
                   <th>Descri&ccedil;&atilde;o do Item</th>
                   <th>Valor</th>  </tr>";

        $items = DB::table('items')->get();
        foreach ($items as $item)
        {
            $this->lista_pronta .= "<tr>
            <td>".$item->nome_item."</td>
            <td>".$item->descricao_item."</td>
            <td>".$item->valor_item."</td>
            </tr>";
        }
        $this->lista_pronta .= " </table></div></div>";
    }
    public function getList($section)
    {
        $this->section = $section;
        $this->setList();
        return $this->lista_pronta;
    }
}
