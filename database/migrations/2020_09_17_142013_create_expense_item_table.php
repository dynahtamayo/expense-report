<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_items', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->decimal('approved_amount', 10, 2);
            $table->integer('submit_user_id')->unique();
            $table->integer('expenses_id')->unique();
            $table->integer('expenses_category_id')->unique();
            $table->integer('asset_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_items');
    }
}
