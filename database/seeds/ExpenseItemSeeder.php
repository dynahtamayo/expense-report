<?php

use Illuminate\Database\Seeder;

use App\ExpenseItem;

class ExpenseItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expense_item = ExpenseItem::create ([
			'description' => 'Description 1',
			'date' => '2020-10-07',
			'amount' => '1',
			'approved_amount' => '2',
			'submit_user_id' => '3',
			'expenses_id' => '4',
			'expenses_category_id' => '5',
			'asset_id' => '6'
			]);
    }
}
