<?php


use Illuminate\Database\Seeder;

class BudgetItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budgetItem = [
        	[  'year' => '2020', 'amount' => '4321', 'total_expenses' => '4321', 'department_id' => '012345', 'category_id' => '01'],
        	[  'year' => '2020', 'amount' => '1234', 'total_expenses' => '1234', 'department_id' => '123456', 'category_id' => '01'],
        	[  'year' => '2020', 'amount' => '5678', 'total_expenses' => '5678', 'department_id' => '234567', 'category_id' => '01'],
        	[  'year' => '2020', 'amount' => '8901', 'total_expenses' => '8901', 'department_id' => '345678', 'category_id' => '01'],
        	[ 'year' => '2020', 'amount' => '2314', 'total_expenses' => '2314', 'department_id' => '456789', 'category_id' => '01'],	
        ];
        DB::table('budgetItems')->insert($budgetItem);
    }
}
