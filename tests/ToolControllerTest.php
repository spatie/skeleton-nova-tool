<?php

namespace Spatie\TailTool\Tests;

use Spatie\TailTool\Http\Controllers\ToolController;
use Spatie\TailTool\TailTool;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_will_return_hello_world()
    {
        $this
            ->postJson('nova-vendor/spatie/tail-tool')
            ->assertSuccessful()
            ->assertJson([
                'text' => '',
                'lastRetrievedLineNumber' => 10,
            ]);
    }

    /** @test */
    public function it_can_start_from_a_specific_line()
    {
        $this
            ->postJson('nova-vendor/spatie/tail-tool', ['afterLineNumber' => 8])
            ->assertSuccessful()
            ->assertJson([
                'text' => 'nine' . PHP_EOL . 'ten' . PHP_EOL,
                'lastRetrievedLineNumber' => 10,
            ]);
    }
}
