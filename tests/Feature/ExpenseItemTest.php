<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ExpenseItem;

class ExpenseItemTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_all_the_expense_items()
    {
        //given
       
        $expense_items = factory(ExpenseItem::class, 5)->create();


        //when
        $response = $this->get('/expense-items');

        //then
        $response->assertStatus(200);
        
    }   

    /** @test */
    public function a_user_can_see_a_single_expense_item() {
        $expense_item = factory(ExpenseItem::class)->create();
        $response = $this->get('/expense-items/' . $expense_item->id);
        $response->assertSee($expense_item->description);
    }

    /** @test */
    public function a_user_can_create_an_expense_item()
    {
        $response = $this->get('/expense-items/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_a_new_expense_item()
    {
        $form_fields = factory(ExpenseItem::class)->raw();

        $response = $this->post('/expense-items', $form_fields);

        $this->assertDatabaseHas('expense_items', $form_fields);

        $response->assertRedirect('/expense-items');


    }

    //NEED TO EDIT THIS LAST ONE ----------------------------------------------------------------
    // /** @test */
    // public function a_user_can_update_an_expense_item()
    // {
    //     $this->withoutExceptionHandling();
    //     $expense_item = factory(ExpenseItem::class)->create();
    //     $form_fields = [
    //         'description' => 'New',
    //         'date' => '2015-01-01',
    //         'amount' => '5',
    //         'approved_amount' => '3',
    //         'submit_user_id' => '101',
    //         'expenses_id' => '202',
    //         'expenses_category_id' => '303',
    //         'asset_id' => '404'
    //     ];

    //     $this->post(route('expense-items.edit', $expense_item->id), $form_fields)->assertOk(route('expense-items.index'));
    //     $this.assertDatabaseHas('expense_items', $form_fields);

    // }

    /** @test */
    public function a_user_can_delete_an_expense_item()
    {
        $form_fields = factory(ExpenseItem::class)->create();

        $response = $this->delete('/expense-items/' .$form_fields->id);

        $response->assertRedirect('/expense-items');
    }
    
    


}
