<x-jet-action-section>
    <x-slot name="title">
       BC Button Modal (Do not use directly)
    </x-slot>

    <x-slot name="description">
        Something modal
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            The count is {{$count}}
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="$toggle('showingModal')" wire:loading.attr="disabled">
                Do something that requires naked modal.
            </x-jet-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-modal wire:model="showingModal">
           Totally naked modal.  Click anywhere outside the box.
        </x-jet-modal>
    </x-slot>
</x-jet-action-section>
