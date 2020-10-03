<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class budget_items extends Model
{
	protected $table = 'budget_items';
	protected $fillable = ['id','year','amount' ,'total_expenses','department_id','category_id'];
}