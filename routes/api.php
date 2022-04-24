<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('', function () {
    return Response::json([
        'name' => Config::get('app.name'),
        'documentation' => Config::get('app.documentation'),
        'environment' => Config::get('app.env'),
    ]);
})->name('info');

Route::get('status', [StatusController::class, 'show'])
    ->name('status.show');

Route::post('users/login', [UserController::class, 'login'])
    ->name('users.login');

Route::middleware('auth:sanctum')
    ->group(function () {
    });
