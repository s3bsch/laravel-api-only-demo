<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<UserAddress> */
class UserAddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'street' => $this->faker->streetAddress,
        ];
    }

    public function forUser(User $user): self
    {
        return $this->state(['user_id' => $user->id])
            ->afterMaking(function (UserAddress $address) use ($user) {
                $address->user()
                    ->associate($user);
            });
    }
}
