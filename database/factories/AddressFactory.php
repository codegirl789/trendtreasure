<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        return [
            'user_id' => $user->id,
            'address_line_1' => fake()->address(),
            'address_line_2' => fake()->address(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'postal_code' => fake()->postcode(),
            'landmark' => fake()->address(),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
