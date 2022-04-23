<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Database\Factories\UserAddressFactory;
use Database\Factories\UserFactory;
use Database\Factories\UserProfileFactory;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedDemoUser1();
        $this->seedDemoUser2();
        $this->seedDemoUser3();
    }

    /*
     * Demo user #1 is a complete user having everything set and also more than one address.
     */
    private function seedDemoUser1(): void
    {
        $profile = UserProfileFactory::empty();
        $profile->first_name = 'Demo';
        $profile->last_name = 'User1';
        $profile->birthday = Carbon::parse('2001-01-01');

        $user = UserFactory::new()
            ->withProfile($profile)
            ->create(['email' => 'user1@demo']);

        UserAddressFactory::new()
            ->forUser($user)
            ->count(2)
            ->create(['comment' => 'Comment from Demo User1.']);
    }

    /*
     * Demo user #2 is a complete user having one address.
     */
    private function seedDemoUser2(): void
    {
        $profile = UserProfileFactory::empty();
        $profile->first_name = 'Demo';
        $profile->last_name = 'User2';
        $profile->birthday = Carbon::parse('2002-01-01');

        $user = UserFactory::new()
            ->withProfile($profile)
            ->create(['email' => 'user2@demo']);

        UserAddressFactory::new()
            ->forUser($user)
            ->create();
    }

    /*
     * Demo user #3 is a minimal user having no address at all.
     */
    private function seedDemoUser3(): void
    {
        $profile = UserProfileFactory::empty();
        $profile->first_name = 'Demo';
        $profile->last_name = 'User3';

        UserFactory::new()
            ->withProfile($profile)
            ->create(['email' => 'user3@demo']);
    }
}
