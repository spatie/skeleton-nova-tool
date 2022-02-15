<?php

namespace :namespace_vendor\:namespace_tool_name;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Tool as BaseTool;

class Tool extends BaseTool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script(':package_name', __DIR__.'/../dist/js/tool.js');
        Nova::style(':package_name', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        return MenuSection::make('New Nova Tool')
            ->path('/:package_name')
            ->icon('server');
    }
}
