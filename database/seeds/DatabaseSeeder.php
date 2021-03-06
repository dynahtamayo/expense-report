<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(BudgetItemsSeeder::class);
        $this->call(AssetSeeder::class);
        $this->call(ExpensesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ExpenseItemSeeder::class);
    }
}
