<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $categories = [
            'soul',
            'Ambient',
            'Pop',
            'Rap',
            'Funk',
            'Rock',
            'Reggae / Dub',
            'Techno',
            'Electro',
        ];

        // Get a random existing category or return null if none exist
        $category = Category::whereIn('name', $categories)->inRandomOrder()->first();

        if ($category) {
            return [
                'name' => $category->name,
            ];
        }

        // Handle the case where no categories exist
        return [
            'name' => $this->faker->randomElement($categories),
        ];
    }
}
