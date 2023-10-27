<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Transaction ' . $this->faker->word(),
            'description' => $this->faker->sentence(3),
            'amount' => $this->faker->randomFloat(2, 1, 100),
            'transaction_type' => $this->faker->randomElement(['expense', 'income']),
            'is_investment' => false,
            'status' => $this->faker->randomElement(['pending', 'paid', 'overdue']),
            'payment_date' => $this->faker->date(),
            'due_date' => null,
            'recurring_transaction_id' => null,
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'account_id' => Account::all()->random()->id,
        ];
    }
}
