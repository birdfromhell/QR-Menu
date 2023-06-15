<?php

declare(strict_types=1);

namespace dacoto\SetEnv;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SetEnvServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->bind('setenv', function ($app) {
            return new SetEnvEditor($app);
        });
    }
}
