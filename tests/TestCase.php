<?php

namespace Spatie\:tool_name\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\:tool_name\NovaTool;
use Spatie\:tool_name\NovaToolServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();

        NovaTool::auth(function() {
           return true;
        });
    }

    protected function getEnvironmentSetUp($app)
    {

    }

    protected function getPackageProviders($app)
    {
        return [
            NovaToolServiceProvider::class,
        ];
    }
}
