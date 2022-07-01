<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Prefetch extends Component
{
    public $employee;
    public function loadEmployee()
    {
        usleep(500000);
        $this->employee = Employee::find(20);
    }
    public function render()
    {
        return view('livewire.prefetch');
    }
}
