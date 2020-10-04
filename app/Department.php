<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'name', 'parent_department_id'
    ];

    public function users(){
    	return $this->hasMany(User::class);
    }

    public function department(){
    	return $this->hasOne(Department::class);
    }

    public function budgetitems(){
    	return $this->hasMany(BudgetItem::class);
    }
}
