<?php

namespace Muneebkh2\LaravelBase64ApiAuthenticator;

use Illuminate\Support\Facades\Artisan;
use Muneebkh2\LaravelBase64ApiAuthenticator\Tests\TestCase;

class GenerateApiKeyTest extends TestCase
{
    public function test_generate_command_generated_api_keys ()
    {
        Artisan::call('apikey:generate --name="cms-ego"');
    }
}
