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
        $Category = Category::create ([
			'name' => 'Advertising',
			'money' => '50,000',
			]);
        	//DB::table('category')->insert($category);
    }
}
