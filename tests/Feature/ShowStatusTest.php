<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class ShowStatusTest extends TestCase
{
    function test_it_returns_application_status()
    {
        $url = URL::route('status.show');
        $response = $this->get($url);

        $response->assertOk()
            ->assertJsonStructure(['database', 'cache']);
    }
}
