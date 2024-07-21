<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all()->random();
        $sub_category = SubCategory::all()->random();

        return [
            'category_id' => $category->id,
            'sub_category_id' => $sub_category->id,
            'name' => fake()->words(3, true),
            'slug' => fake()->slug(4, true),
            'description' => fake()->paragraph(10),
            'image' => fake()->imageUrl(),
            'discount' => fake()->numberBetween(1, 20),
            'size' => fake()->randomElement(['small', 'medium', 'large']),
            'color' => fake()->colorName(),
            'price' => fake()->numberBetween(100, 900),
            'quantity' => fake()->numberBetween(1, 20),
            'best_seller' => fake()->randomElement([true, false]),
            'popular' => fake()->randomElement([true, false]),
        ];
    }
}
