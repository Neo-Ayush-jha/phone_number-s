<?php

namespace Database\Factories;
use App\Models\Phone;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            "number"=>$this->faker->phoneNumber(),
        ];
    }
}
