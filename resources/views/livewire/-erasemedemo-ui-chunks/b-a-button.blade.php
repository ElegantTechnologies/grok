<x-jet-action-section>
    <x-slot name="title">
       BA Button w/ modal confirmation
    </x-slot>

    <x-slot name="description">
        Permanently something your account.
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            This is another example in the jet-action-section, but with a button that does something w/ livewire
        </div>

        <div class="mt-5">
            <x-jet-button wire:click="$toggle('confirmingClick')" wire:loading.attr="disabled">
                Do something that requires confirmation.
            </x-jet-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingClick">
            <x-slot name="title">
                Modal from Button Confirmation
            </x-slot>

            <x-slot name="content">
               Are you sure you want to click that?
                <p/>
                (If you confirm, then a message will show as a laravel debug message)
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingClick')" wire:loading.attr="disabled">
                    Never mind.
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="clickHard" wire:loading.attr="disabled">
                    Click it! Click it!
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
