<?php

namespace Tests\Feature;

use App\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepartmentsFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function show_all_departments(){
        $departments = factory(Department::class, 5)->create();
        $response = $this->get('/departments');
        $response->assertStatus(200);

    }

    /** @test */
    public function show_one_Department(){
        $departments = factory(Department::class)->create();
        $response = $this->get('/departments/' . $departments->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function create_Department(){
        $response = $this->get('/departments/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function store_Department(){
        $departments = factory(Department::class)->raw();
        $response = $this->post('/departments', $departments);
        $this->assertDatabaseHas('departments', $departments);
        $response->assertRedirect('/departments');
    }

     /** @test */
    public function edit_departments(){
        $departments = factory(Department::class)->create();
        $response = $this->get('/departments' . $departments->id . '/edit');
        $response->assertStatus(200);
    }

    /** @test */
    public function update_departments(){
        $departments = factory(Department::class)->create();
        $departments_updated_values = factory(Department::class)->raw([
            'departments_id' => $departments->id
        ]);
        $response = $this->put('/departments/' . $departments->id, $departments_updated_values);
        $this->assertDatabaseMissing('departments', [
            "first_name" => $departments->first_name,
            "last_name" => $departments->last_name,
            "phone" => $departments->phone,
            "email" => $departments->email,
            "password" => $departments->password,
            "department_id" => $departments->department_id
        ]);
        $this->assertDatabaseHas('departments', $departments_updated_values);
        $response->assertRedirect('/departments');
    }

    /** @test */
    public function delete_Department(){
        $departments = factory(Department::class)->create();
        $response = $this->delete('/departments/' . $departments->id);
        $this->assertDeleted('departments', ["id" => $departments->id]);
        $response->assertRedirect('/departments');
    }
}