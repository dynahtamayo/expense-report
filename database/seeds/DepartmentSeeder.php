<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            ['name' => 'Department1', 'parent_department_id' => '1'],
            ['name' => 'Department2', 'parent_department_id' => '1'],
            ['name' => 'Department3', 'parent_department_id' => '2'],
            ['name' => 'Department4', 'parent_department_id' => '2'],
            ['name' => 'Department5', 'parent_department_id' => '3'],
        ];
        DB::table('departments')->insert($department);
    }
}
