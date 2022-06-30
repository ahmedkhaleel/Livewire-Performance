<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;

class EmployeeListItem extends Component
{
    public function getEmployeeProperty()
    {
        return Employee::find($this->employeeId);
    }
    public function deleteEmployee()
    {

       dd($this->employee);
    }
    public $employeeFullName;
    public $employeeId;
    public $employeeName;
    public function render()
    {
        return view('livewire.employee-list-item');
    }
}
