<div>
    <div class="text-xl">AA Nothing</div>
 NEW NEW NEW  This is a live wire component that does nothing.  It is just hmtl withing a div.
    <p/>
    This was created via <code>php artisan make:livewire DemoUiChunks/AANothing</code>
    <p/>
    This was invoked from the parent blade via: <code>    &#64;livewire('demo-ui-chunks.a-a-nothing')</code>
    <p/>
    The component is <code>app/Http/Livewire/DemoUiChunks/AANothing.php</code>
    <p/>
    The blade is <code>resources/views/livewire/demo-ui-chunks/a-a-nothing.blade.php</code>
    <p>
        This simple component has a <pre><code class="language-php"> public string $name = "JJByDefault"; </code></pre> property.
        <br>
        We can can access this name variable here, in the blade like this
        @php
        $example =<<<EOD
        Hello {{\$name}}.
        EOD;
        $exampleHtml = htmlspecialchars($example);
        @endphp
        <pre><code class="language-php">{!! $exampleHtml !!} </code></pre>
        Hello {{$name}}.

    </p>
</div>
