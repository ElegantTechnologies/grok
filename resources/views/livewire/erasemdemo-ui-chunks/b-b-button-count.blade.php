<x-jet-action-section>
    <x-slot name="title">
       BB Button Count
    </x-slot>

    <x-slot name="description">
        Count up
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Count: <span class="text-red-800 text-xl">{{$count}}</span> <div class="text-gray-300">(count is any public var we add to the livewire controller class)</div>
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="doClick()" wire:loading.attr="disabled">
                Increment
            </x-jet-button>
        </div>

    </x-slot>
</x-jet-action-section>
