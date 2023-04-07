<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'code'=>$this->faker->ean8(),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->numberBetween(10,10000),
            'numberUnits'=>$this->faker->numberBetween(10,5000),
            'urlimg'=>$this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
