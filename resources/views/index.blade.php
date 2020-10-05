<x-grok::grok_page_layout>
    <x-slot name="header">
            Grok Index
    </x-slot>
    <div class="mt-4"/>
    <x-grok::action-section title="Guides" description="Explanations of Stuff">
        <x-slot name="content">
            @foreach (\ElegantTechnologies\Grok\GrokWrangler::grokkees() as $asrAGrokProvider)
                @php
                // this works: http://test-jet.test/grok/Spatie/Skeleton/string

                @endphp
                <a class="text-blue-400 underline" href="/grok/{{$asrAGrokProvider['vendorNameCamelCase']}}/{{$asrAGrokProvider['packageNameCamelCase']}}">{{$asrAGrokProvider['vendorNameCamelCase']}}.{{$asrAGrokProvider['packageNameCamelCase']}}</a>
                <br>
            @endforeach
            <p/>

        </x-slot>>
    </x-grok::action-section>
</x-grok::grok_page_layout>
