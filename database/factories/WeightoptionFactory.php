<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Weightption;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weightoption>
 */
class WeightoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Title' => '----',
        ];
    }
}
