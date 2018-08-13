<?php

namespace Spatie\:tool_name\Tests;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class NovaToolControllerTest extends TestCase
{
    /** @test */
    public function it_has_a_controller_that_returns_a_successful_response()
    {
        $this
            ->getJson('/nova/nova-tool')->assertSuccessful();

    }
}