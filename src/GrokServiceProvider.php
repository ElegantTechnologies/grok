<?php

namespace ElegantTechnologies\Grok;

use ElegantTechnologies\Grok\Http\Controllers\GrokController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class GrokServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/grok.php' => config_path('/eleganttechnologies/grok.php'),
                ],
                ['config', 'eleganttechnologies-config', 'eleganttechnologies-grok']
            );

            $this->publishes(
                [
                    __DIR__ . '/../resources/views' => base_path('resources/views/vendor/grok-fyi'),
                ],
                ['views', 'eleganttechnologies-views', 'eleganttechnologies-grok']
            );

            $migrationFileName = 'create_grok_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes(
                    [
                        __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path(
                            'migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName
                        ),
                    ],
                    ['migrations', 'eleganttechnologies-migrations', 'eleganttechnologies-grok']
                );
            }



            $this->publishes([
                 __DIR__.'/../resources/public' => public_path('eleganttechnologies/grok'),
                ],
                ['public', 'eleganttechnologies-public', 'eleganttechnologies-grok']
            );
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'grok');


        Route::macro(
            'grok',
            function (string $prefix) {
                Route::prefix($prefix)->group(
                    function () {
                        // Sample routes that only show while developing...
                        if (App::environment(['local', 'testing'])) {
                            // prefixed url to string
                            Route::get(
                                '/ElegantTechnologies/Grok/sample_string', // you will absolutely need a prefix in your url
                                function () {
                                    return "Hello string via blade prefix";
                                }
                            );

                            // prefixed url to blade view
                            Route::get(
                                '/ElegantTechnologies/Grok/sample_blade',
                                function () {
                                    return view('grok::grok/index');
                                }
                            );

                            // prefixed url to controller
                            Route::get(
                                '/ElegantTechnologies/Grok/controller',
                                [GrokController::class, 'sample']
                            );
                        }
                    }
                );
            }
        );


        if (App::environment(['local', 'testing'])) {
            // global url to string
            Route::get(
                '/grok/ElegantTechnologies/Grok/sample_string',
                function () {
                    return "Hello string via global url.";
                }
            );

            // global url to blade view
            Route::get(
                '/grok/ElegantTechnologies/Grok/sample_blade',
                function () {
                    return view('grok::grok/sample_blade');
                }
            );

            // global url to controller
            Route::get('/grok/ElegantTechnologies/Grok/sample_controller', [GrokController::class, 'sample']);
        }

        /* Configure the routes offered by the application.
           Still learning - this should work, but gives Trying to get property 'profile_photo_url' of non-object (View:
           And for livewire, getting an alert 'this page timed out'
           #$this->loadRoutesFrom(__DIR__.'/routes.php');
        */

        //        \Livewire::component('grok::a-a-nothing', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\AANothing::class);
        //        \Livewire::component('grok::a-b-almost-nothing', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\ABAlmostNothing::class);
        //        \Livewire::component('grok::a-c-nothing-but-formatted', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\ACNothingButFormatted::class);
        //        \Livewire::component('grok::b-a-button', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BAButton::class);
        //        \Livewire::component('grok::b-b-button-count', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BBButtonCount::class);
        //        \Livewire::component('grok::b-c-button-modal', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BCButtonModal::class);
        //        \Livewire::component('grok::b-d-button-modal-dialog', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BDButtonModalDialog::class);
        //        \Livewire::component('grok::b-e-button-poll-reset', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BEButtonPollReset::class);
        //        \Livewire::component('grok::b-f-button-modal-wire', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BFButtonModalWire::class);
        //        \Livewire::component('grok::b-f-button-modal-wire-form', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\BFButtonModalWireForm::class);
        //        \Livewire::component('grok::c-a-input', \ElegantTechnologies\Grok\Components\OBEDemoUiChunks\CAInput::class);

        // GROK
        if (App::environment(['local', 'testing'])) {
            \ElegantTechnologies\Grok\GrokWrangler::grokMe(static::class, 'ElegantTechnologies', 'grok', 'resources/views/grok', 'grok');
            #Route::get('/grok/ElegantTechnologies/grok', fn () => view('grok::grok/index'));
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/grok.php', 'eleganttechnologies.grok');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
