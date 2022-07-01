<div>
    <button class="bg-blue-700 rounded p-1.5 text-gray-50" wire:click="toggle">Toggle Me</button>

    @if($open)
        <div>
            you can see me ....
        </div>
    @endif
</div>
