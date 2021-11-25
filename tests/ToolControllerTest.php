<?php

namespace amespace_vendor\namespace_tool_name\Tests;

use amespace_vendor\namespace_tool_name\Http\Controllers\ToolController;
use amespace_vendor\namespace_tool_name\namespace_tool_name;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('nova-vendor/vendor/package_name/endpoint')
            ->assertSuccessful();
    }
}
