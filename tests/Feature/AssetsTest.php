<?php

namespace Tests\Feature;

use App\Asset;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssetsTest extends TestCase
{
    /** @test */
    public function a_user_can_see_all_the_assets()
    {
        //given
        $assets = factory(Asset::class, 5)->create();

        //when
        $response = $this->get('/assets');

        //then
         $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_see_a_single_asset() {
        $asset = factory(Asset::class)->create();
        $response = $this->get('/assets');
        $response->assertSee($asset->description);
    }

    /** @test */
    public function a_user_can_create_an_asset()
    {
        $response = $this->get('/assets/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_a_new_asset()
    {
        $form_fields = factory(Asset::class)->raw();

        $response = $this->post('/assets', $form_fields);

        $this->assertDatabaseHas('assets', $form_fields);

        $response->assertRedirect('/assets');
    
    /** @test */
    public function a_user_can_delete_an_asset()
    {
        $form_fields = factory(Asset::class)->create();

        $response = $this->delete('/assets');

        $response->assertRedirect('/assets');
    }

    }
}
