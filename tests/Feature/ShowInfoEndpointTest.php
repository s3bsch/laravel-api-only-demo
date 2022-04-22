<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShowInfoEndpointTest extends TestCase
{
    function test_it_returns_basic_info()
    {
        $response = $this->get('');

        $response->assertOk()
            ->assertJsonStructure([
                'name',
                'documentation',
                'environment',
            ]);
    }
}
