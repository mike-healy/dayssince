<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(1),
            'name' => $this->faker->word(),
            'done_at' => null,
            'target_frequency' => 7,
            'color' => null,
        ];
    }
}
