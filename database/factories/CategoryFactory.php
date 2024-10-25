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
     * List of categories to be added.
     */
    protected static array $categories = [
        'Soul',
        'Ambient',
        'Pop',
        'Rap',
        'Funk',
        'Rock',
        'Reggae / Dub',
        'Techno',
        'Electro'
    ];

    /**
     * Counter to keep track of the current category.
     */
    protected static int $counter = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryName = self::$categories[self::$counter];
        self::$counter = (self::$counter + 1) % count(self::$categories);
        Category::firstOrCreate(['name' => $categoryName]);
        return [
            'name' => $categoryName,
        ];
    }
}
