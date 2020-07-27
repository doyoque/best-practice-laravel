<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'isbn' => rand(111111111,999999999)
    ];

    /** how to run factory **/
    /** php artisan tinker **/
    /** factory(\App\Books::class, 100)->create() **/
});
