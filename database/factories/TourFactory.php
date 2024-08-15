<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tour;

class TourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'destination' => $this->faker->city(),
            'start' => $this->faker->dateTimeBetween('now', 'next month'),
            'end' => $this->faker->dateTimeBetween('next month + 1 month', 'next month + 2 months'),
            'price' => $this->faker->randomFloat(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
