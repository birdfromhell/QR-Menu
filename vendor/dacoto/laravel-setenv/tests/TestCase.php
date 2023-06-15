<?php

namespace dacoto\SetEnv\Tests;

use dacoto\SetEnv\Facades\SetEnv;
use dacoto\SetEnv\SetEnvServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        if (file_exists(__DIR__.'/.env')) {
            unlink(__DIR__.'/.env');
        }
        copy(__DIR__.'/stubs/env', __DIR__.'/.env');
    }

    public function tearDown(): void
    {
        parent::tearDown();

        unlink(__DIR__.'/.env');
    }

    protected function getPackageProviders($app): string
    {
        return SetEnvServiceProvider::class;
    }

    protected function defineEnvironment($app): void
    {
        $app->useEnvironmentPath(__DIR__);
    }

    protected function getPackageAliases($app): array
    {
        return [
            'SetEnv' => SetEnv::class,
        ];
    }
}
