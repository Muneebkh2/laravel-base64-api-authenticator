<?php

namespace Muneebkh2\LaravelBase64ApiAuthenticator;

use Closure;
use Illuminate\Support\ServiceProvider;

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
