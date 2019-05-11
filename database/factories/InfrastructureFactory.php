<?php
use App\Infrastructure;
use Faker\Generator as Faker;

$factory->define(Infrastructure::class, function (Faker $faker) {
    return [
        // 'barangay_id' => $faker->unique()->numberBetween(1, App\Barangay::count()),
        'barangay_id'=>App\User::all()->random()->id,
        'national_m_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_m_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_m_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_m_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_m_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_m_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_m_steel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_m_steel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_m_steel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_m_steel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_m_steel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_m_steel'=> $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_m_wooden' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_m_wooden' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_m_wooden' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_m_wooden' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_m_wooden' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_m_wooden' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_m_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_m_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_m_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_m_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_m_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_m_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_km_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_km_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_km_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_km_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_km_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_km_concrete' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_km_asphalt' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_km_asphalt' => $faker->numberBetween($min = 100000, $max = 1000000000), 
        'city_km_asphalt' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_km_asphalt' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_km_asphalt' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_km_asphalt' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_km_gravel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_km_gravel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_km_gravel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_km_gravel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_km_gravel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_km_gravel' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_km_earthfill' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_km_earthfill' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_km_earthfill' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_km_earthfill' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_km_earthfill' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_km_earthfill' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'national_km_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'provincial_km_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'city_km_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'barangay_km_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'total_km_total' => $faker->numberBetween($min = 100000, $max = 1000000000),
        'operational_km_total' => $faker->sentence(),
    ];
});