<?php

use Illuminate\Database\Seeder;

class ExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $expense = [
            ['description' => 'Description 1', 'date_submitted' => '2020/09/23', 'date_status' => '2020/09/23', 'status' => 'UP', 'submit_user_id' => '1', 'approval_user_id' => '1'],
            ['description' => 'Description 2', 'date_submitted' => '2020/09/23', 'date_status' => '2020/09/23', 'status' => 'DOWN', 'submit_user_id' => '2', 'approval_user_id' => '2'],
            ['description' => 'Description 3', 'date_submitted' => '2020/09/23', 'date_status' => '2020/09/23', 'status' => 'UP', 'submit_user_id' => '3', 'approval_user_id' => '3'],
            ['description' => 'Description 4', 'date_submitted' => '2020/09/23', 'date_status' => '2020/09/23', 'status' => 'UP', 'submit_user_id' => '4', 'approval_user_id' => '4'],
            ['description' => 'Description 5', 'date_submitted' => '2020/09/23', 'date_status' => '2020/09/23', 'status' => 'DOWN', 'submit_user_id' => '5', 'approval_user_id' => '5'],
        ];
        DB::table('expenses')->insert($expense);
    }
}
