<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

// use App\Models\User;
use App\Models\ProductLine;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(ProductLine::class, function (Faker $faker) {
	return [
		'productLine' => $faker->ean8(),
        'textDescription' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'htmlDescription' => $faker->randomHtml(2,3),
        'images' => $faker->imageUrl($width = 640, $height = 480),
	];
});

$factory->define(Product::class, function (Faker $faker) {
	$productLine = DB::table('productlines')->pluck('productLine');

	return [
		'productCode' => $faker->isbn13(),
        'productName' => $faker->name(),
        'productLine' => $faker->randomElement($productLine),
        'productScale' => $faker->text($maxNbChars = 100),
        'productVendor' => $faker->catchPhrase(),
        'productDescription' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'quantityInStock' => $faker->numberBetween($min = 1000, $max = 9000),
        'buyPrice' => $faker->numberBetween($min = 10, $max = 200),
        'MSRP' => $faker->numberBetween($min = 40000, $max = 50000)
	];
});


