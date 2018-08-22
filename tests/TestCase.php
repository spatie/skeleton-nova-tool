<?php

namespace :namespace_vendor\:namespace_tool_name\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use :namespace_vendor\:namespace_tool_name\TailToolServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();

        Route::middlewareGroup('nova', []);
    }

    protected function getPackageProviders($app)
    {
        return [
            TailToolServiceProvider::class,
        ];
    }
}
