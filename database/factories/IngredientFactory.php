<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ingredients = [
            'Tomato','Onion','Garlic','Paprika','Cucumber',
            'Lettuce','Broccoli','Carrot','Potato',
            'Mushroom','Spinach','Zucchini','Eggplant',
            'Bean','Pea','Corn','Cheese',
            'Milk','Butter','Egg','Meat',
            'Chicken','Fish','Salmon','Shrimp',
            'Bread','Pasta','Rice','Oil',
            'Salt','Pepper',
        ];

        $allergies = [
            'Peanut', 'Tree Nut', 'Milk', 'Egg', 'Fish', 'Shellfish',
            'Soy', 'Wheat', 'Sesame', 'Mustard', 'Celery', 'Sulfites',
        ];
        $type = ['beef', 'fruit', 'vegetable', 'chicken', 'pork', 'fish', 'lam' ];

        return [
            'name' => fake()->randomElement($ingredients),
            'type' => fake()->randomElement($type),
            'allergy' => fake()->randomElement($allergies),
        ];
    }
}
