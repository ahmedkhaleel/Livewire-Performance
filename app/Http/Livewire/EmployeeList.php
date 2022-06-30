<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;

class EmployeeList extends Component
{

    public function render()
    {

        $employees = Employee::paginate(50);
        return view('livewire.employee-list',
        [
            'employees' => $employees
        ]
        );
    }
}
