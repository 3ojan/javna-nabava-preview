<?php

namespace Database\Factories;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    protected $model = Entry::class;


public function definition()
{
    return [
        'external_id' => $this->faker->unique()->numberBetween(1, 500),
        'oib' => $this->faker->numerify('###########'),
        'name' => $this->faker->company,
        'postcode' => $this->faker->postcode,
        'city' => $this->faker->city,
        'date' => $this->faker->date(),
        'amount' => $this->faker->randomFloat(2, 0, 10000),
        'description' => $this->faker->sentence,
        'level_1' => [$this->faker->randomDigit], // Added this line
        'level_2' => [$this->faker->randomDigit], // Added this line
        'level_3' => [$this->faker->randomDigit], // Added this line
        'level_4' => [$this->faker->randomDigit], // Added this line
        'function_level_1' => [$this->faker->randomDigit],
        'function_level_2' => [$this->faker->randomDigit],
        'function_level_3' => [$this->faker->randomDigit],
        'function_level_4' => [$this->faker->randomDigit],
        // ... Add definitions for other fields such as level_2, level_3, etc.
    ];
}
}
