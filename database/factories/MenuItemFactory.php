<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $faker = $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        
        $content = [
            "food" => $faker->foodName(),     // A random Food Name
            "beverage" => $faker->beverageName(), // A random Beverage Name
            "dairy" => $faker->dairyName(),  // A random Dairy Name
            "vegetable" => $faker->vegetableName(),// A random Vegetable Name
            "fruit" => $faker->fruitName(),  // A random Fruit Name
            "meat" => $faker->meatName(),  // A random Meat Name
            "sauce" => $faker->sauceName(),  // A random Sauce Name
        ];
        $categories = DB::table("categories")->get();
        $choice = $categories[rand(0, count($categories)-1)];

    
        return [
            'category_id' => $choice->id,
            'name' => $content[$choice->name],
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
