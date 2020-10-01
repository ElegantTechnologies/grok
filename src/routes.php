<?php
/*
Grok: (I could not get this to live in grok/src/routes.php)
[ ] Add the following line to your routes/web.php file...... oh, there must be a more laravel-ish way
require_once(base_path('vendor/eleganttechnologies/grok/src/routes.php'));
*/

 if (App::environment(['local', 'testing'])) {
     #Route::get('/grok', fn () => redirect('/grok/index')); // Default to dashboard
     Route::get(
         '/grok',
         function () {
             return view('grok::index');
         }
     )->name('grok');


     Route::get(
         '/grok/ElegantTechnologies/Grok/jetstream',
         function () {
             return view('grok::grok/jetstream/index');
         }
     )->name('grok.jetstream');

     Route::get(
         '/grok/ElegantTechnologies/Grok/livewire',
         function () {
             return view('grok::grok/livewire/index');
         }
     )->name('grok.livewire');

     Route::get(
         '/grok/ElegantTechnologies/Grok/grok',
         function () {
             return view('grok::grok/grok/index');
         }
     )->name('grok.grok');
 }
