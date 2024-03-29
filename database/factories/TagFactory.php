<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Tag::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => $word,
        'slug' => Str::slug($word),
        'status' => mt_rand(0,1),
    ];
});
