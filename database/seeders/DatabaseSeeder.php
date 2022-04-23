<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Default database seeder.
 *
 * This seeder is run by the following artisan commands:
 *  - `php artisan db:seed`
 *  - `php artisan migrate:fresh --seed`
 */
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            DemoUserSeeder::class,
        ]);
    }
}
