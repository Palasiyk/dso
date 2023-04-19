<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StatistikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'namber' => $this->faker->unique()->numberBetween(1,22),
//            'image' =>'./../images/team/'. $this ->faker->numberBetween(1,22).'.jpeg',
            'PlayerName' => $this->faker->numberBetween(1,50),
            'PlayedSet' => $this->faker->numberBetween(1,50),
            'TotPoint' => $this->faker->numberBetween(1,50),
            'TotServ' => $this->faker->numberBetween(1,50),
            'AceServ' => $this->faker->numberBetween(1,50),
            'ErrServ' => $this->faker->numberBetween(1,50),
            'EffServ' => $this->faker->numberBetween(1,50),
            'TotRes' => $this->faker->numberBetween(1,50),
            'NegRes' => $this->faker->numberBetween(1,50),
            'ExcRes' => $this->faker->numberBetween(1,50),
            'TotAtac' => $this->faker->numberBetween(1,50),
            'ErrAtac' => $this->faker->numberBetween(1,50),
            'BlkAtec' => $this->faker->numberBetween(1,50),
            'ExcAtec' => $this->faker->numberBetween(1,50),
            'EffAtec' => $this->faker->numberBetween(1,50),
            'Block' => $this->faker->numberBetween(1,50),
        ];
    }
}
