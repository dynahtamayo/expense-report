<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'phone' => '09123456789',
            'email' => 'jdc@yahoo.com',
            'password' => bcrypt('password'),
            'department_id' => '1'
        ]);
        //DB::table('users')->insert($user);
    }
}
