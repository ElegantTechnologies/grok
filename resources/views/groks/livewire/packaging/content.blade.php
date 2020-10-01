@php
$slug = "packaging";
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample.blade.php";
@endphp
<a href="https://laravel-livewire.com/docs/2.x/package-dev">https://laravel-livewire.com/docs/2.x/package-dev</a>
<x-grok::title>Make the LiveWire component</x-grok::title>
<pre><code class="language-console">
php artisan make:livewire DemoUiChunks/AANothing
</code></pre>

<x-grok::title>Test that it is alive</x-grok::title>
Change the blade to say something, from...
@php $pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample_test_blade_old.blade.php"; @endphp
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>
to...
@php $pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample_test_blade_new.blade.php"; @endphp
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>



@php $pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample_test_include_orig.blade.php"; @endphp
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>


<x-grok::title>Modify to be package friendly</x-grok::title>
Given: You set up a package at 'packages/eleganttechnologies/grok'
<pre><code class="language-console">
# in console
mkdir -p packages/eleganttechnologies/grok/src/Components/DemoUiChunks #if needed
mv app/Http/Livewire/DemoUiChunks/AANothing.php packages/eleganttechnologies/grok/src/Components/DemoUiChunks

mkdir -p packages/eleganttechnologies/grok/resources/views/livewire/demo-ui-chunks #if needed. Place where desired
mv resources/views/livewire/demo-ui-chunks/a-a-nothing.blade.php mkdir -p packages/eleganttechnologies/grok/views/livewire/demo-ui-chunks
</code></pre>

@php
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample_modify_lwcontroller.blade.php";
@endphp
<x-grok::tas-sample-from-file language="php" path="{{$pathOffRouteToSample}}"/>



@php
$pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample_modify_provider.blade.php";
@endphp
<x-grok::tas-sample-from-file language="php" path="{{$pathOffRouteToSample}}"/>


<x-grok::title>Update the initial test</x-grok::title>
# In some blade, like views/dashboards.blade.php
@php $pathOffRouteToSample = $pathOffRouteToGroks."/$slug/sample_test_include_orig.blade.php"; @endphp
<x-grok::tas-sample-from-file language="html" path="{{$pathOffRouteToSample}}"/>

