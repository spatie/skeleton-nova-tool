<?php

namespace amespace_vendor\namespace_tool_name\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use amespace_vendor\namespace_tool_name\ToolServiceProvider;

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
            ToolServiceProvider::class,
        ];
    }
}
