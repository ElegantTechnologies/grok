<x-grok::grok_page_layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LiveWire
        </h2>
    </x-slot>

    @php
    $pathOffRouteToGroks = 'packages/eleganttechnologies/grok/resources/views/groks/livewired';
   //@include('tassy::/groks/title/description',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
    @endphp

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">



                <x-jet-section-border/>
                <div id="livewirestuff">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <h3 class="text-2xl font-semibold text-gray-800">Now for a bunch of livewire stuff</h3>
                        <x-jet-section-border/>
                        @livewire('grok::a-a-nothing')
<x-jet-section-border/>
                         <x-grok::action-section title="Packaging stuff">
                        <x-slot name="description">
                            @include('grok::groks.livewire.packaging.description',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
                        </x-slot>

                        <x-slot name="content">
                            @include('grok::groks.livewire.packaging.content',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
                        </x-slot>
                    </x-grok::action-section>

                        <x-jet-section-border/>
                        @livewire('grok::a-b-almost-nothing')
                        <x-jet-section-border/>
                        @livewire('grok::a-c-nothing-but-formatted')
                        <x-jet-section-border/>
                        @livewire('grok::b-a-button')
                        <x-jet-section-border/>
                        @livewire('grok::b-b-button-count')
                        <x-jet-section-border/>
                        @livewire('grok::b-c-button-modal')
                        <x-jet-section-border/>
                        @livewire('grok::b-d-button-modal-dialog')
                        <x-jet-section-border/>
                        @livewire('grok::b-e-button-poll-reset')
                        <x-jet-section-border/>
                        @livewire('grok::b-f-button-modal-wire')
                        <x-jet-section-border/>
                        @livewire('grok::b-f-button-modal-wire-form')
                        <x-jet-section-border/>
                        @livewire('grok::c-a-input')
                        <x-jet-section-border/>


                    </div>

                </div>
                <x-jet-section-border/>

            </div>
        </div>
    </div>
</div>


</x-grok::grok_page_layout>
