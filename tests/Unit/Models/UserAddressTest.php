<?php

namespace Tests\Unit\Models;

use Database\Factories\UserAddressFactory;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserAddressTest extends TestCase
{
    use DatabaseTransactions;

    function test_user_relation_works()
    {
        $user = UserFactory::new()
            ->create();

        $address = UserAddressFactory::new()
            ->forUser($user)
            ->create();

        $this->assertTrue($address->exists);
        $this->assertNotNull($address->user);
        $this->assertEquals($user->id, $address->user_id);
    }
}
