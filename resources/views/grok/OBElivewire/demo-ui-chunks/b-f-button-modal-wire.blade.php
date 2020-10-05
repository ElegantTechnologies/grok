<x-jet-action-section>
    <x-slot name="title">
       Bf Button Modal Dialog
    </x-slot>

    <x-slot name="description">
        Demonstration of modal with livewire inside of it
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            The count from container is {{$count}}
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="$toggle('showingModal')" wire:loading.attr="disabled">
                Polling Modal
            </x-jet-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="showingModal">
            <x-slot name="title">A Dialog Modal Title</x-slot>
            <x-slot name="content">
                <div>Note: This poll is a different instance than the main page. It resets differently.</div>
                @livewire('grok::b-e-button-poll-reset')
            </x-slot>
            <x-slot name="footer">
                <span class="text-gray-400">Your footer text goes here</span>
                  <x-jet-secondary-button wire:click="$toggle('showingModal')" wire:loading.attr="disabled">
                    Never mind.
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="doModalPrimary" wire:loading.attr="disabled">
                    This button is still for the wrapping wire component
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
