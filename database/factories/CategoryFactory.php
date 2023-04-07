<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
class CategoryFactory extends Factory
{
    public function definition()
    {
        try {
            return [
                'name' => $this->faker->name(),
                'code' => $this->faker->ean8(),
                'activity' => (bool)random_int(0, 1),
                'parentCategory' => $this->faker->name(),
            ];
        } catch (\Exception $e) {
        }
    }
}
