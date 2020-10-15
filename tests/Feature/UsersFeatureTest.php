<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function show_all_users(){
        $users = factory(User::class, 10)->create();
        $response = $this->get('/users');
        $response->assertStatus(200);
    }

    /** @test */
    public function show_one_user(){
        $users = factory(User::class)->create();
        $response = $this->get('/users/' . $users->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function create_user(){
        $response = $this->get('/users/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function store_user(){
        $users = factory(User::class)->raw();
        $response = $this->post('/users', $users);
        $this->assertDatabaseHas('users', $users);
        $response->assertRedirect('/users');
    }

     /** @test */
    public function edit_users(){
        $users = factory(User::class)->create();
        $response = $this->get('/users' . $users->id . '/edit');
        $response->assertStatus(200);
    }

    /** @test */
    public function update_users(){
        $users = factory(User::class)->create();
        $users_updated_values = factory(User::class)->raw([
            'users_id' => $users->id
        ]);
        $response = $this->p('/users/' . $users->id, $users_updated_values);
        $this->assertDatabaseMissing('users', [
            "first_name" => $users->first_name,
            "last_name" => $users->last_name,
            "phone" => $users->phone,
            "email" => $users->email,
            "password" => $staff->password,
            "department_id" => $users->department_id
        ]);
        $this->assertDatabaseHas('users', $users_updated_values);
        $response->assertRedirect('/users');
    }

    /** @test */
    public function delete_user(){
        $users = factory(User::class)->create();
        $response = $this->delete('/users/' . $users->id);
        $this->assertDeleted('users', ["id" => $users->id]);
        $response->assertRedirect('/users');
    }
}