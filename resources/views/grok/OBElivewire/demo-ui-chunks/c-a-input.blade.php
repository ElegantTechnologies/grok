<x-jet-form-section submit="updateData">
    <x-slot name="title">
       C A Input: Mood
    </x-slot>

    <x-slot name="description">
        <span>This creates a mini-form where a user can use a text input update their mood. It shows how to store data back
        in the wire controller.
        <br><br>    {{-- <p/> and <hr> do not work--}}
        We're using a jet-form-section, so the whole right side will be a form, requiring 'slot:form' && 'slot:action'
        </span>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <div class="text-sm text-gray-600">The current mood is: {{ $mood ?: 'unknown'}} <div class="text-gray-500">(Note: This shows latest, even if invalid)</div></div>
        </div>



        <!-- mood -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="mood" value="Your mood" />

            <x-jet-input id="mood"
                        type="text"
                        class="mt-1 block w-full"
                        wire:model.defer="mood"             />

            <x-jet-input-error for="mood" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button>
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
