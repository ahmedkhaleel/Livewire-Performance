<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Toggle extends Component
{
    public $open = false;
    public function toggle()
    {
        $this->open = ! $this->open;
    }
    public function render()
    {
        return view('livewire.toggle');
    }
}
