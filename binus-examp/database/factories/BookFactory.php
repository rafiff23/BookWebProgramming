<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'author' => $this->faker->name,
            'publisher_id' => $this->faker->randomElement([1,2,3,4,5]),
            'year' => $this->faker->randomElement([2002, 2010, 2030, 2020 ,2022]),
            'synopsis' => $this->faker->paragraphs(3, true),
            'image' => ''
        ];
    }
}
