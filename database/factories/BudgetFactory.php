<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Orçamento ' . $this->faker->word(),
            'limit' => $this->faker->randomFloat(2, 0, 100),
            'used' => $this->faker->randomFloat(2, 0, 100),
            'period' => $this->faker->randomElement(['weekly', 'monthly', 'yearly']),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
