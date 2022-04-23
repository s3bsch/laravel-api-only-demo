<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    public function run(): void
    {
        /*
         * Demo user #1 is a complete user having everything set and also more than one address.
         */

        UserFactory::new()
            // TODO #12 Add relations.
            ->create(['email' => 'user1@demo']);

        /*
         * Demo user #2 is a complete user having one address.
         */

        UserFactory::new()
            // TODO #12 Add relations.
            ->create(['email' => 'user2@demo']);

        /*
         * Demo user #3 is a minimal user having no address at all.
         */

        UserFactory::new()
            // TODO #12 Add relations.
            ->create(['email' => 'user3@demo']);
    }
}
