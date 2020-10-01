@php
    $fileNameFromRoot = base_path()."/".$path;
    if (!file_exists($fileNameFromRoot)) {
        $code = "Sample does not exist:  '$path' is not there.";
    } else {
        $code = file_get_contents($fileNameFromRoot);
    }
    $sampleEscaped = htmlspecialchars($code);

@endphp
<pre><code class="language-{{$language}}">{!!  $sampleEscaped !!}</code></pre>


