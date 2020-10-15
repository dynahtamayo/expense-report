<?php

namespace Tests\Feature;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CategoryTest extends TestCase
{

    /** @test */
    public function see_all_category()
    {
        //given
        $category = factory(Category::class, 5)->create();

        //when
        $response = $this->get('/category');

        //then
        $response->assertStatus(200);
        
    }

    /** @test */
    public function see_one_category() {
        $category = factory(Category::class)->create();

        $response = $this->get('/category/' . $category->id);

        $response->assertStatus(200);
    }

    /** @test */
    public function create_category()
    {
        $response = $this->get('/category/create');

        $response->assertStatus(200);
    }

     /** @test */
    public function store_new_category()
    {
        $form_fields = factory(Category::class)->raw();

        $response = $this->post('/category', $form_fields);

        $this->assertDatabaseHas('category', $form_fields);
        $response->assertRedirect('/category');
    }
 

    //Need Some debugging 
    //Error from array to string conversion
    /** @test */
    public function update_category()
    {
        $category = factory(Category::class)->create();
        $category_updated_values = factory(Category::class)->raw([
            'category_id' => $category->id
        ]);

        $response = $this->put('/category/' . $category->id, $category_updated_values);

        $this->assertDatabaseMissing('category', [
            "name" => $category->name,
            "money" => $category->money
        ]);

        $this->assertDatabaseHas('category' . $category_updated_values);
        $response->assertRedirect('/category');
    }   


    /** @test */
    public function delete_category()
    {
        $category = factory(Category::class)->create();

        $response = $this->delete('/category/' .$category->id);

        $this->assertDeleted('category', ["id" => $category->id]);
        $response->assertRedirect('/category');
    }

}
