<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->name,
            'namber' => $this->faker->unique()->numberBetween(1,22),
            'image' =>$this ->faker->unique()->numberBetween(1,22).'.jpeg',
        ];
    }
}
