<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Expense;

class ExpenseTest extends TestCase
{
     /** @test */
    public function a_user_can_see_all_expenses()
    {
        $expenses = factory(Expense::class, 5)->create();
        $response = $this->get('/expenses');
        $response->assertStatus(200);

    }   

    /** @test */
    public function a_user_can_see_a_single_expense() {
        $expense_item = factory(Expense::class)->create();
        $response = $this->get('/expenses/' . $expenses->id);
        $response->assertSee($expense->description);
    }

    /** @test */
    public function a_user_can_create_an_expense()
    {
        $response = $this->get('/expenses/create');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_store_new_expense()
    {
        $form_fields = factory(Expense::class)->raw();
        $response = $this->post('/expenses', $form_fields);
        $this->assertDatabaseHas('expenses', $form_fields);
        $response->assertRedirect('/expenses');


    }

    /** @test */
    public function a_user_can_delete_an_expense()
    {
        $form_fields = factory(Expense::class)->create();
        $response = $this->delete('/expenses/' .$form_fields->id);
        $response->assertRedirect('/expenses');
    }


    
}
