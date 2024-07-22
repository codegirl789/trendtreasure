<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lovepreet',
            'username' => 'Itskaurlove',
            'email' => 'lk@gmail.com',
            'role' => 1,
            'password' => Hash::make('password'),
            'image' => fake()->randomElement(['users/mouse.jpg', 'users/tiger.jpg', 'users/dog.jpg', 'users/turtle.jpg', 'users/parrot.jpg']),
        ]);


        User::factory()->create([
            'name' => 'Aman',
            'username' => 'Aman 007',
            'email' => 'aman@gmail.com',
            'password' => Hash::make('password'),
            'image' => fake()->randomElement(['users/mouse.jpg', 'users/tiger.jpg', 'users/dog.jpg', 'users/turtle.jpg', 'users/parrot.jpg']),
        ]);

        User::factory(20)->create();

        // Address::factory(20)->create();
        Category::factory(20)->create();
        SubCategory::factory(20)->create();
        Product::factory(200)->create();
    }
}
