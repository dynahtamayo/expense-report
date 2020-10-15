<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BudgetItem;
use App\Expense;
use App\User;
use App\Department;
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\ExpenseItem;

$factory->define(User::class, function (Faker $faker, $department_id) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'department_id' => $department_id,
    ];
});

$factory->define(Department::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'parent_department_id' => $faker->randomDigit    
    ];
});

$factory->define(BudgetItem::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween($min = 1000, $max = 9000),
        'year' => $faker->date,
        'amount' => $faker->numberBetween($min = 1000, $max = 9000),
        'total_expenses' =>$faker->numberBetween($min = 1000, $max = 9000),
        'department_id' => $faker->numberBetween($min = 1000, $max = 9000),
        'category_id' => $faker->numberBetween($min = 1000, $max = 9000),


$factory->define(Expense::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
		'date_submitted' => $faker->date,
		'date_status' => $faker->date,
		'status' => $faker->text,
		'submit_user_id' => $faker->numberBetween($min = 1000, $max = 10000),
		'approval_user_id' => $faker->numberBetween($min = 1000, $max = 10000),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'money' => $faker->numberBetween($min = 1, $max = 10000),
	];
});

$factory->define(ExpenseItem::class, function (Faker $faker) {
	return [
		'description' => $faker->text,
		'date' => $faker->date,
		'amount' => $faker->numberBetween($min = 1000, $max = 10000),
		'approved_amount' => $faker->numberBetween($min = 1000, $max = 10000),
		'submit_user_id' => $faker->numberBetween($min = 1000, $max = 10000),
		'expenses_id' => $faker->numberBetween($min = 1000, $max = 10000),
		'expenses_category_id' => $faker->numberBetween($min = 1000, $max = 10000),
		'asset_id' => $faker->numberBetween($min = 1000, $max = 10000),
	];
});
