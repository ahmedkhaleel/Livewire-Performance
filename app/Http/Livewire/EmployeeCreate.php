<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployeeCreate extends Component
{
    public $name;
    public function createEmployee()
    {
        dd($this->name);
    }
    public function render()
    {
        return view('livewire.employee-create');
    }
}
