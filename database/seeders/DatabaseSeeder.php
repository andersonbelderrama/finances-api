<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Budget;
use App\Models\Category;
use App\Models\RecurringTransaction;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Anderson Belderrama',
            'email' => 'andersonbelderrama@gmail.com',
            'password' => bcrypt('290423')
        ]);
        Category::factory(10)->create();
        Account::factory(50)->create();
        Transaction::factory(200)->create();
        RecurringTransaction::factory(10)->create();
        Budget::factory(30)->create();

    }
}
