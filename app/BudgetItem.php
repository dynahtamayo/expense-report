<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetItem extends Model
{
    protected $table = 'budget_items';
	protected $fillable = ['id','year','amount' ,'total_expenses','department_id','category_id'];

	public function department(){
    	return $this->hasOne(Department::class);
    }

    public function category(){
    	return $this->hasOne(Category::class);
    }
}
