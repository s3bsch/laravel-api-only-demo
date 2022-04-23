<?php

namespace Tests\Unit\Models;

use Database\Factories\UserAddressFactory;
use Database\Factories\UserFactory;
use Database\Factories\UserProfileFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    function test_addresses_relation_works()
    {
        $user = UserFactory::new()
            ->create();

        $addresses = UserAddressFactory::new()
            ->count(2)
            ->make();

        $user->addresses()
            ->saveMany($addresses);

        $this->assertCount(2, $user->addresses);
    }

    function test_profile_relation_works()
    {
        $user = UserFactory::new()
            ->create();

        $profile = UserProfileFactory::new()
            ->make();

        $user->profile()
            ->save($profile);

        $this->assertTrue($profile->exists);
        $this->assertEquals($user->id, $profile->user_id);
        $this->assertNotNull($user->profile);
    }
}
