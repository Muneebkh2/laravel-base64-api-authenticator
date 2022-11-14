<?php

namespace Muneebkh2\LaravelBase64ApiAuthenticator;

use Illuminate\Support\ServiceProvider;
use Muneebkh2\LaravelBase64ApiAuthenticator\Console\Commands\GenerateApiKey;

class LaravelBase64ApiAuthenticatorServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if ($this->app->runningInConsole()) :
            $this->commands([
                GenerateApiKey::class
            ]);
        endif;
    }
}
