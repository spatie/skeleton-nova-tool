<?php

namespace Spatie\:tool_name;

use Closure;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Symfony\Component\HttpFoundation\Request;

class NovaTool extends Tool
{
    /** @var \Closure */
    public static $authUsing;

    public function boot()
    {
        Nova::script('NovaTool', __DIR__.'/../dist/js/tool.js');
        Nova::style('NovaTool', __DIR__.'/../dist/css/tool.css');

        $this->canSee(function () {
            return static::check(request());
        });
    }

    public function renderNavigation()
    {
        return view('NovaTool::navigation');
    }

    public static function auth(Closure $callback): NovaTool
    {
        static::$authUsing = $callback;

        return new static;
    }

    public static function check(Request $request): bool
    {
        return (static::$authUsing ?? function () {
                return app()->environment('local');
            })($request);
    }
}
