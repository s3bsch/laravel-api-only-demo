<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<UserProfile> */
class UserProfileFactory extends Factory
{
    protected $model = UserProfile::class;

    public static function empty(): UserProfile
    {
        return new UserProfile();
    }

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
        ];
    }

    public function forUser(User $user): self
    {
        return $this->state(['user_id' => $user->id])
            ->afterMaking(function (UserProfile $profile) use ($user) {
                $profile->user()
                    ->associate($user);
            });
    }
}
