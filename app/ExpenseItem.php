<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends Model
{
    protected $guarded = [];

    public function expense(){
    	return $this->hasOne(Expense::class);
    }

    public function category(){
    	return $this->hasOne(Category::class);
    }

    public function asset(){
    	return $this->hasOne(Asset::class);
    }
}
