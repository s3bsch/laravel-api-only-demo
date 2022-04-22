<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Throwable;

class StatusController extends BaseController
{
    public function show(): JsonResponse
    {
        return Response::json([
            'database' => $this->databaseStatus(),
            'cache' => $this->cacheStatus(),
        ]);
    }

    private function cacheStatus(): bool
    {
        Cache::put('status', true);
        return Cache::pull('status', false);
    }

    private function databaseStatus(): bool
    {
        try {
            $migrationsCount = DB::table('migrations')
                ->count();

            return ($migrationsCount > 0);
        } catch (Throwable) {
            return false;
        }
    }
}
