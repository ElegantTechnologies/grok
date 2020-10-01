<x-grok::grok_page_layout>
    <x-slot name="header">
            Grok Index
    </x-slot>
    <div class="mt-4"/>
    <x-grok::action-section title="Guides" description="Explanations of Stuff">
        <x-slot name="content">
            @foreach (\ElegantTechnologies\Grok\GrokWrangler::grokkees() as $nameOfAGrokProvider)
                @php
                // this works: http://test-jet.test/grok/Spatie/Skeleton/string
                $arrParts = explode('\\', $nameOfAGrokProvider);
                $VendorName = $arrParts[0];
                $PackageName = $arrParts[1];

                @endphp
                <a class="text-blue-400 underline" href="/grok/{{$VendorName}}/{{$PackageName}}">{{$VendorName}}.{{$PackageName}}</a>
                <br>
            @endforeach
            <p/>

        </x-slot>>
    </x-grok::action-section>
</x-grok::grok_page_layout>
