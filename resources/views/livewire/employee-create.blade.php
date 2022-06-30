<div>
    <form wire:submit.prevent="createEmployee">
        <div>
            <input wire:model.defer="name" class=" rounded" type="text" placeholder="Name"> {{$name}}
        </div>
        <button type="submit">Create</button>
    </form>
</div>
