<?php

namespace Spatie\:tool_name\Tests\Middleware;

use Spatie\:tool_name\NovaTool;
use Spatie\:tool_name\Tests\TestCase;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateTest extends TestCase
{
    /** @test */
    public function it_will_deny_access_if_the_auth_function_returns_false()
    {
        $this->get('/nova/nova-tool')->assertSuccessful();

        NovaTool::auth(function() {
            return false;
        });

        $this->get('/nova/nova-tool')->assertStatus(Response::HTTP_FORBIDDEN);
    }
}
