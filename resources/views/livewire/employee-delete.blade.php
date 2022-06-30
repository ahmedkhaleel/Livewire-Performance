<div>
    <p>Are you sure you want to delete {{ $this->employee->name }} ({{$this->employee->id}})?</p>
    <button wire:click="deleteEmployee" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Yes
    </button>
    <button wire:click="" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        No
    </button>
</div>
