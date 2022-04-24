<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class LoginRequest extends BaseRequest
{
    protected array $rules = [
        'email' => ['required', 'email'],
        'password' => 'required',
    ];

    /**
     * @throws AuthenticationException
     */
    public function loginUser(): string
    {
        $user = $this->authenticateUser();
        $token = $user->createToken('token');

        return $token->plainTextToken;
    }

    /**
     * @throws AuthenticationException
     */
    private function authenticateUser(): User
    {
        $credentials = $this->validated();
        $authenticated = Auth::attempt($credentials);

        if ($authenticated) {
            return $this->user();
        }

        throw new AuthenticationException();
    }
}
