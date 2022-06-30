<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SomeListItem extends Component
{
    public $item;
    public function render()
    {
        return view('livewire.some-list-item');
    }
}
