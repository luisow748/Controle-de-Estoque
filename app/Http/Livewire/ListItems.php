<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ListItems extends Component
{
    public $item;
    public $count = 0;
    public $lista = [
        'jose', 'luis', 'bruna', 'emanuel', 'teste'
    ];
    public $cat;

    public function increment()
    {
        $this->count++;
    }
    public function add()
    {
        array_push($this->lista, $this->item);
        $this->item = '';

    }

    public function delete(int $key)
    {
        unset($this->lista[$key]);
    }

    public function resetList()
    {
        unset($this->lista);
        $this->item = '';
    }

    public function render()
    {

        return view('livewire.list-items');
    }
}
