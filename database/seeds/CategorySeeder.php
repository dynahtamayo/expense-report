<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name' => 'Advertising', 'money' => 50000.00],
            ['name' => 'Contract', 'money' => 50000.00],
            ['name' => 'Transportation', 'money' => 50000.00],
            ['name' => 'Business Uniforms', 'money' => 50000.00],
            ['name' => 'Bank Fees', 'money' => 50000.00]
        ];
        DB::table('category')->insert($category);
    }
}
