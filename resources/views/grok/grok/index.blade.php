   <!-- Code highlighting 1 of 2-->



<x-grok::grok_page_layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Grok
        </h2>
    </x-slot>


<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-grok::action-section>
                    <x-slot name="title">
                       Installation
                    </x-slot>

                    <x-slot name="description">
                        <div class="text-xs">
                        See readme

                        </div>
                    </x-slot>
                      <x-slot name="content">
                          Q: Why is code here ugly?
                          <br>
                          A: Try publishing the assets.
                          <br>
                          <code>
php artisan vendor:publish --provider="ElegantTechnologies\Grok\GrokServiceProvider" --tag=public
                          </code>
                      </x-slot>
            </x-grok::action-section>
p
                <x-jet-section-border/>
                  <x-grok::action-section>
                    <x-slot name="title">
                       Show Code Samples
                    </x-slot>

                    <x-slot name="description">
                        <div class="text-xs">
                        code
                        </div>
                    </x-slot>
                      <x-slot name="content">
                          You can show code like this css
                          <pre><code class="language-css">p { color: red }</code></pre>
                          by encasing in
                          For example...
                          @php
                          $sample =<<<EOD
                          <pre><code class="language-css"> p { color: red } </code></pre>
                          EOD;
                          $sampleEscaped =  htmlspecialchars($sample);
                          @endphp
                          <pre><code class="language-html">{!!  $sampleEscaped !!}</code></pre>

                          <hr>

                          <x-grok::title>Escaping</x-grok::title>
                          Since the browser will render html, we need to escape our samples.
                          @php
                          $sample =<<<EOL
                          --- in php ---
                          \$sample =<<<EOD
                          <pre><code class="language-css"> p { color: red } </code></pre>
                          EOD;
                          \$sampleEscaped =  htmlspecialchars(\$sample);

                          ---- in html/blade ----
                          <pre><code class="language-php">{!!  \$sampleEscaped !!}</code></pre>
                          EOL;
                          $sampleEscaped =  htmlspecialchars($sample);
                          @endphp

                           <pre><code class="language-php">{!!  $sampleEscaped !!}</code></pre>
                          <hr>

                          <x-grok::title>Loading from file</x-grok::title>
                          If you are loading the sample code from a file, you can do something like this...
                           @php
                          $sample =<<<EOL
                          <x-grok::tas-sample-from-file language="php" path="vendor/eleganttechnologies/grok/resources/views/grok/grok/sample_code/short.blade.php"/>
                          EOL;
                          $sampleEscaped =  htmlspecialchars($sample);
                          @endphp
                          <pre><code class="language-php">{!!  $sampleEscaped !!}</code></pre>
                          Which will yield...
                          <x-grok::tas-sample-from-file language="php" path="vendor/eleganttechnologies/grok/resources/views/grok/grok/sample_code/short.blade.php"/>
                          The required parameters are 'language' and 'path', where 'path' is off the app root directory
                          and language is (php,html,javascript,console,css);
                          <hr>

                          <x-grok::title>Installation</x-grok::title>
                          To install and set up code highlighting, so something like this....
                          <x-grok::tas-sample-from-file language="console" path="vendor/eleganttechnologies/grok/resources/views/grok/grok/sample_code/installationSteps.blade.php"/>

                          Now, in your resources/layouts/app.blade.php file (or wherever is relevant for your app) copy in html...
                          <x-grok::tas-sample-from-file language="html" path="vendor/eleganttechnologies/grok/resources/views/grok/grok/sample_code/html.blade.php"/>

                    </x-slot>
                  </x-grok::action-section>



            </div>
        </div>
    </div>
</div>

<!-- Code highlighting 2 of 2 -->


</x-grok::grok_page_layout>
