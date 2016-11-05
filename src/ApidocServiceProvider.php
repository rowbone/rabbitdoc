<?php

namespace Rowbone\Apidoc;

use Illuminate\Support\ServiceProvider;

class ApidocServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'apidoc');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        /*$this->app->bind('command.apidoc',function(){
            return new ApidocCommand;
        });

        $this->commands('command.apidoc');*/

        if ($this->app->runningInConsole()) {
            $this->commands([
                ApidocCommand::class
            ]);
        }
    }
}
