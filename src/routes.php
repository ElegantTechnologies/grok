<?php
/*
Grok: (I could not get this to live in grok/src/routes.php)
[ ] Add the following line to your routes/web.php file...... oh, there must be a more laravel-ish way
require_once(base_path('vendor/eleganttechnologies/grok/src/routes.php'));
*/

 if (App::environment(['local', 'testing'])) {
     Route::get(
         '/grok',
         function () {
             return view('grok::index');
         }
     )->name('grok');


     Route::get('/grok/{vendorNameCamelCase}/{packageNameCamelCase}', function ($vendorNameCamelCase, $packageNameCamelCase) {
         $asrGrok = \ElegantTechnologies\Grok\GrokWrangler::getAsrGrok_byVendorPackage($vendorNameCamelCase, $packageNameCamelCase);

         return view("{$asrGrok['bladePrefix']}::grok/index");
     })->name('grok');

     Route::get('/grok/{vendorNameCamelCase}/{packageNameCamelCase}/{sub}', function ($vendorNameCamelCase, $packageNameCamelCase, $sub) {
         $asrGrok = \ElegantTechnologies\Grok\GrokWrangler::getAsrGrok_byVendorPackage($vendorNameCamelCase, $packageNameCamelCase);
         $viewPath = "{$asrGrok['bladePrefix']}::grok/$sub/index";

         return view($viewPath);
     })->name('grok');
 }
