<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ToggleAlpine extends Component
{
    public $open = false;
    public function mount()
    {
        if ((int)request()->has('open') === 1 ) {
            $this->open = true;
        }
    }
    public function render()
    {
        return view('livewire.toggle-alpine');
    }
}
