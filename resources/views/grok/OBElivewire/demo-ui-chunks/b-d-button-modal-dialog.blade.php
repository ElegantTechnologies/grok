<x-jet-action-section>
    <x-slot name="title">
       BD Button Modal Dialog
    </x-slot>

    <x-slot name="description">
        Something modal. Like a confirmatin modal, but w/to the caution symbol
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            The count is {{$count}}
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="$toggle('showingModal')" wire:loading.attr="disabled">
                Do something that requires a non-dramatic modal.
            </x-jet-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="showingModal">
            <x-slot name="title">A Dialog Modal Title</x-slot>
            <x-slot name="content">Some stuff you want to convey to the user The count is {{$count}}</x-slot>
            <x-slot name="footer">
                <span class="text-gray-400">Your footer text goes here</span>
                  <x-jet-secondary-button wire:click="$toggle('showingModal')" wire:loading.attr="disabled">
                    Never mind.
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="doModalPrimary" wire:loading.attr="disabled">
                    Click it! Click it!
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
