<?php

namespace PhpScriptSolutions\ModelGenerator;

use Illuminate\Support\ServiceProvider;

class ModelGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('command.make.models', function ($app) {
            return $app['PhpScriptSolutions\ModelGenerator\Commands\MakeModelsCommand'];
        });

        $this->commands('command.make.models');
    }
}