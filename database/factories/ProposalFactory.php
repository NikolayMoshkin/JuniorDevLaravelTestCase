<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Proposal::class, function (Faker $faker) {
    return [
        'created_at' => now(),
        'updated_at' => now(),
        'name' => $faker->name,
        'surname' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'education_level_id' => $faker->numberBetween(1, 3),
        'review' => $faker->realText(),
        'proposal_type' => $faker->numberBetween(1, 2),
        'ip' => '127.0.0.1',
        'utm' => 'utm=123',
    ];
});
