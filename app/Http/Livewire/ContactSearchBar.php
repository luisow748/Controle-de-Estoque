<?php

namespace App\Http\Livewire;

use App\Contact;
use App\Models\Item;
use App\Models\User;
use Livewire\Component;

class ContactSearchBar extends Component
{
    public $query;
    public $contacts;
    public $highlightIndex;

    public function mount()
    {
        $this->reset();
    }

    // public function reset()
    // {
    //     $this->query = '';
    //     $this->contacts = [];
    //     $this->highlightIndex = 0;
    // }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->contacts) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->contacts) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectContact()
    {
        $contact = $this->contacts[$this->highlightIndex] ?? null;
        if ($contact) {
          //  $this->redirect(route('show-contact', $contact['id']));
        }
    }

    public function updatedQuery()
    {
        $this->contacts = Item::where('name', 'like', '%' . $this->query . '%')
        ->orWhere('description', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.contact-search-bar');
    }
}
