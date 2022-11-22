<?php

namespace Database\Factories;
use App\Models\Meal;
use Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    public function definition()
    {
        $faker = Faker\Factory::create('ja_JP');
        return [
            'name' => $faker->word(),
            'category_id' => rand(1, 3),
            'user_id' =>rand(1, 5),
            'image_id' =>rand(1,3),
            'cost' => $faker->numberBetween(1,1000),
            'difficulty' => rand(1, 3),
            'ingredient' => $faker->realText(30),
            'way' => $faker->realText(),
        ];
    }
}
