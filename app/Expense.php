<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';
    protected $fillable = ['description', 'date_submitted', 'date_status', 'status', 'submit_user_id', 'approval_user_id'];
}
