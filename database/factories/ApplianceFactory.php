<?php

namespace Database\Factories;

use App\Models\Appliance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appliance>
 */
class ApplianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word . ' Appliance',
            'brand' => $this->faker->company,
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'warranty' => $this->faker->numberBetween(12, 60),
        ];
    }
}
