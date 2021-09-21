<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'user_ids' => $this->generateUserIdsAsArray()
        ];
    }

    private function generateUserIdsAsArray()
    {
        return User::query()->inRandomOrder()->limit(random_int(1, User::query()->count()))->pluck('id');
    }
}
