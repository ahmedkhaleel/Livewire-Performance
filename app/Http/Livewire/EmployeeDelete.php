<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EmployeeDelete extends Component
{
    public $employeeId;

    public function getEmployeeProperty()
    {
        return Employee::find($this->employeeId);
    }
    public function deleteEmployee()
    {

        $employee = $this->employee;

    }
    public function render()
    {
        return view('livewire.employee-delete',
        [
            'employee' => $this->employee

        ]
        );
    }
}
