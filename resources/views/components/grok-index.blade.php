{{--Component that, given the blade path, will automatically link to each grok--}}
@php
    #dd(app('request')->url());
    $url = app('request')->url(); # "http://test-jet.test/grok/ElegantTechnologies/Grok"
    $arrUrl = explode('/',$url);

    $vendorNameCamelCase = $arrUrl[4];
    $packageNameCamelCase = $arrUrl[5];

    #$asrGrok = \ElegantTechnologies\Grok\GrokWrangler::getAsrGrok_byStaticClass($grokMeKey);
    $asrGrok = \ElegantTechnologies\Grok\GrokWrangler::getAsrGrok_byVendorPackage($vendorNameCamelCase, $packageNameCamelCase);
    /*dd($asrGrok);
    array:8 [▼
      "className" => "ElegantTechnologies\Grok\GrokServiceProvider"
      "vendorNameCamelCase" => "ElegantTechnologies"
      "vendorNameLowerCase" => "eleganttechnologies"
      "vendorNameKebabCase" => "elegant-technologies"
      "packageNameCamelCase" => "grok"
      "packageNameKebabCase" => "grok"
      "grokViewOffVendor" => "resources/views/grok"
      "bladePrefix" => "grok"
    ]*/
    $bladePrefix = $asrGrok['bladePrefix'];
    #$relativePath = "/vendor/{$asrGrok['grokViewOffPackageRoot']}";
    $dirNameFromRoot = base_path().DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.$asrGrok['grokViewOffPackageRoot'];

    $filesNames = scandir($dirNameFromRoot);
    $dirs = [];
    $fullDirs = [];
    $notDirs = [];
    foreach ($filesNames as $fileName) {
        $maybDir = "$dirNameFromRoot/$fileName";
       if (is_dir($maybDir) && $fileName != '.' && $fileName != '..') {
           $dirs[] = $fileName;
           $fullDirs[] = $maybDir;
       }
    }
@endphp
<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            @foreach ($dirs as $slot=>$dirName)
                @php
                $fullDir = $fullDirs[$slot];

                $indexFileName = "$fullDir/index.blade.php";
                $indexExists =  file_exists($indexFileName);
                $title = $dirName;
                  $descriptionFileName = "$fullDir/description.blade.php";
                    $descriptionExists = file_exists($descriptionFileName);
                @endphp
                @if ($indexExists)
                     @php

                    @endphp
                    <x-grok::action-section title="{{$title}}">
                            <x-slot name="description">
                                @if ($descriptionExists)
                                    {{--   no includy   @include("bladeprefix::/grok/$dirName/description",$attributes->getAttributes())--}}
                                    (Description goes here once you care enough to debug why couldn't include file)
                                @endif
                            </x-slot>


                            <x-slot name="content">
                               <a href="/grok/{{$asrGrok['vendorNameCamelCase']}}/{{$asrGrok['packageNameCamelCase']}}/{{$dirName}}">{{$dirName}}</a>
                            </x-slot>
                        </x-grok::action-section>

                @else
                    @php


                    assert($descriptionExists,$descriptionFileName);

                    $contentFileName = "$fullDir/content.blade.php";
                     assert(file_exists($contentFileName),$contentFileName);




                    @endphp


                    <x-grok::action-section title="{{$title}}">
                        <x-slot name="description">
                            @include("$bladePrefix::grok/$dirName/description",$attributes->getAttributes())
                        </x-slot>


                        <x-slot name="content">
                            @include("$bladePrefix::/grok/$dirName/content", $attributes->getAttributes())
                        </x-slot>
                    </x-grok::action-section>
                @endif
            @endforeach


        </div>
    </div>
</div>
