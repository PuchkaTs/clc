<?php
$factory('App\Area', [
    'name'=>$faker->word,
]);

$factory('App\Project', [
    'title' => $faker->sentence(),
    'description' => $faker->paragraph(),
    'available'=> $faker->boolean(),
    'price'=>$faker->numberBetween(10,100),
    'rooms'=>$faker->numberBetween(1,5),
    'bathrooms'=>$faker->numberBetween(1,5),
    'size'=>$faker->numberBetween(100,200),
    'year'=>$faker->year,
    'area_id'=> 'factory:App\Area',
]);

$factory('App\Feature', [
    'name'=>$faker->word,
]);