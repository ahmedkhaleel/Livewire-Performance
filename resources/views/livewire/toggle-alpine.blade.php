<div x-data="{ open: @entangle('open').defer}">
    <button class="bg-blue-700 rounded p-1.5 text-gray-50" x-on:click="open = ! open">Toggle Me</button>


        <div x-show="open">
            you can see me ....
        </div>

</div>
