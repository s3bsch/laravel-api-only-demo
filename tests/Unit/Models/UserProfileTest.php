<?php

namespace Tests\Unit\Models;

use Database\Factories\UserFactory;
use Database\Factories\UserProfileFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserProfileTest extends TestCase
{
    use DatabaseTransactions;

    function test_user_relation_works()
    {
        $user = UserFactory::new()
            ->create();

        $profile = UserProfileFactory::new()
            ->forUser($user)
            ->create();

        $this->assertTrue($profile->exists);
        $this->assertNotNull($profile->user);
        $this->assertEquals($user->id, $profile->user_id);
    }
}
