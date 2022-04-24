<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class UserController extends BaseController
{
    public function login(LoginRequest $request): JsonResponse
    {
        $token = $request->loginUser();
        return Response::json(compact('token'));
    }
}
