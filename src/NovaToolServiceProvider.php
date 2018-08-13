<?php

namespace Spatie\:tool_name;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;
use Spatie\NovaTool\Middleware\Authenticate;

class NovaToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'NovaTool');
    }

    public function register()
    {
        Route::prefix($this->getNovaUrl('backup-tool'))->middleware(Authenticate::class)->group(function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    public function getNovaUrl(string $url = '/'): string
    {
        if (!class_exists(Nova::class)) {
            return "/nova/{$url}";
        }

        return Nova::path() . "/{$url}";
    }
}
