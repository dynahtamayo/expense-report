<?php

use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $asset = [
        	[ 'description' => 'abc'],
        	[ 'description' => 'def'],
        	[ 'description' => 'ghi'],
        	[ 'description' => 'jkl'],
        	[ 'description' => 'mno'],
        ];
        DB::table('assets')->insert($asset);
    }
}
