<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';
	 protected $fillable = ['name', 'money'];

	public function expenseitems(){
    	return $this->hasMany(ExpenseItem::class);
    }
}