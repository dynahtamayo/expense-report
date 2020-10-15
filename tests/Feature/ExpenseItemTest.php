<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ExpenseItem;

class ExpenseItemTest extends TestCase
{

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
    /** @test */
    // public function a_user_can_update_an_expense_item()
    // {

    //     $form_fields = factory(ExpenseItem::class)->create();

    //     $response = $this->put('/expense-items/'.$form_fields->id, $form_fields->toArray());

    //     $this->assertDatabaseHas('expense_items', $form_fields, $form_fields->toArray());

    //     $response->assertRedirect('/expense-items/'.$form_fields->id);

    // }


    /** @test */
    public function a_user_can_delete_an_expense_item()
    {
        $form_fields = factory(ExpenseItem::class)->create();

        $response = $this->delete('/expense-items/' .$form_fields->id);

        $response->assertRedirect('/expense-items');
    }
    
    


}
