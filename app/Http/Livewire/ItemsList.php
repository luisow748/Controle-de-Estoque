<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class ItemsList extends Component
{
    public $category;

    public function render()
    {
        // $items = Item::where('category_id', $this->category->id_category);
        return view('livewire.items-list',[
            // 'items' => $items,
        ]);
    }
}
