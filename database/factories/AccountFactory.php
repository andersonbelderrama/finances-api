<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank_name' => 'Banco ' . $this->faker->word(),
            'bank_branch' => $this->faker->randomNumber(5, true),
            'account_number' => $this->faker->randomNumber(7, true),
            'account_name' => null,
            'account_status' => $this->faker->randomElement([0, 1]),
            'account_type' => $this->faker->randomElement(['current', 'savings', 'investment']),
            'balance' => $this->faker->randomNumber(5, true),
            'user_id' => User::all()->random()->id,
        ];
    }
}
