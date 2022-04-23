<?php

namespace Tests\Unit\Models;

use Database\Factories\UserFactory;
use Database\Factories\UserProfileFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

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
