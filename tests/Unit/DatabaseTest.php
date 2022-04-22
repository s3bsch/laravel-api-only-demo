<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    function test_database_is_accessible()
    {
        $result = DB::select('select sqlite_version()');
        $this->assertNotEmpty($result);
    }

    function test_migrations_have_been_run()
    {
        $migrationsCount = DB::table('migrations')
            ->count();

        $this->assertGreaterThan(0, $migrationsCount);
    }
}
