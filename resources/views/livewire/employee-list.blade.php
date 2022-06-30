<div>
    @foreach($employees as $employee)
        <livewire:employee-list-item :employeeId="$employee->id" :employeeName="$employee->name" :employeeFullName="$employee->fullName()" />
    @endforeach
</div>
