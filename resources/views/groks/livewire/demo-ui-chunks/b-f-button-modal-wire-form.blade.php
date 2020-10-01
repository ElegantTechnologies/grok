<x-jet-action-section>
    <x-slot name="title">
       Bf Button Modal Dialog Form
    </x-slot>

    <x-slot name="description">
        Demonstration of modal with form-based livewire inside of it
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            The count from container is {{$count}}
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="$toggle('showingModal')" wire:loading.attr="disabled">
                Modal for Form
            </x-jet-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="showingModal">
            <x-slot name="title">A Dialog Modal Title</x-slot>
            <x-slot name="content">
                <div>JJ - This double dialog works, but is super confusing.  Part of the problem is that
                I am think about a form on a page as not having the concept of 'cancel', but should be able
                cancel when in a dialog.  Is this right?
                </div>
                <div>I think they just aren't the same.  We should migrate towards that, but it isn't a real
                use case now (have the same form in two different spots).</div>
                <div>Importantly, this demo chunk definitively shows livewire lives nicely in a modal.</div>
                 @livewire('grok::c-a-input')
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
