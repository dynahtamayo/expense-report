<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function expenseitems(){
    	return $this->hasMany(ExpenseItem::class);
    }
}
