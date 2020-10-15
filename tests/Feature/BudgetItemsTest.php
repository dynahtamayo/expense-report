<?php

namespace Tests\Feature;
use App\User;
use App\BudgetItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class BudgetItemsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_all_the_budget_items()
    {
        $budgetitems = factory(BudgetItem::class, 5)->create();
        $response = $this->get('/budget-items');
        $response->assertStatus(200);
    }

     /** @test */
    public function a_user_can_see_a_single_budget_item()
    {
        $budgetitem = factory(BudgetItem::class)->create();
        $response = $this->get('/budget-items/'. $budgetitem->id);
        $response->assertSee($budgetitem->description);
   }
    /** @test */
    public function a_user_can_create_a_budget_item()
    {
        $response = $this->get('/budget-items/create');
       $response->assertStatus(200);
   }

    /** @test */
    public function a_user_can_create_a_new_budget_item()
    {
        $form_fields = factory(BudgetItem::class)->raw();
        $response = $this->post('/budget-items', $form_fields);
        $this->assertDatabaseHas('budgetitems', $form_fields);    
        $response->assertRedirect('/budget-items');
    }

 /** @test */
    public function a_user_can_delete_a_budget_item()
    {
        $form_fields = factory(BudgetItem::class)->create();
        $response = $this->delete('/budget-items/', $form_fields->id);
        $response->assertRedirect('/budget-items');
    }

     /** @test */
   // public function a_user_can_update_a_budget_item()
   // {
   //     $this->actingAs (factory(BudgetItem)->create());
   //     $budgetitems = factory(BudgetItem::class)->create();
   //     $response = $this->put('/budget-items/'.$form_fields->id, $form_fields->toArray());
   //     $response->assertdatabaseHas('budgetitems',['id' => $form_fields->id]);
   // }
}
